<!-- resources/views/components/login-modal.blade.php -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="loginForm" action="{{ route('login2') }}" method="POST">
                    @csrf
                   <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email" required>
</div>
<div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" required>
</div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Balance Confirmation Modal -->
<div class="modal fade" id="balanceModal" tabindex="-1" aria-labelledby="balanceModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="balanceModalLabel">Confirm Deduction</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Your current balance is <span id="userBalance"></span> rupees.</p>
                <p id="balanceMessage">Confirm to proceed. 1 rupee will be deducted from your balance.</p>
            </div>
            <div class="modal-footer">
                <button type="button" id="addBalance" class="btn btn-primary" style="display: none;">Add Balance</button>
                <button type="button" id="confirmDeduction" class="btn btn-primary" style="display: none;">Confirm</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function() {
        var convertForm = $('#convertForm');
        var balanceModal = new bootstrap.Modal($('#balanceModal')[0]);
        var loginModal = new bootstrap.Modal($('#loginModal')[0]);

        function getCsrfToken() {
            return $('meta[name="csrf-token"]').attr('content');
        }

        function updateCsrfTokenInForm(token) {
            var tokenInput = $('input[name="_token"]');
            if (tokenInput.length === 0) {
                // Create a new hidden input element with the CSRF token
                tokenInput = $('<input>').attr({
                    type: 'hidden',
                    name: '_token',
                    value: token
                });
                // Append the new input element to the form
                convertForm.append(tokenInput);
            } else {
                // Update the existing CSRF token input value
                tokenInput.val(token);
            }
        }

        function handleBalanceCheckAndConfirm() {
            $.ajax({
                url: "{{ route('checkBalance') }}",
                method: 'GET',
                headers: {
                    'X-CSRF-TOKEN': getCsrfToken()
                },
                success: function(response) {
                    if (response.success) {
                        var balance = response.balance;
                        $('#userBalance').text(balance);

                        if (balance > 0) {
                            // Show Confirm button and hide Add Balance button
                            $('#confirmDeduction').show();
                            $('#addBalance').hide();
                        } else {
                            // Show Add Balance button and hide Confirm button
                            $('#confirmDeduction').hide();
                            $('#addBalance').show();
                        }

                        balanceModal.show();

                         $('#confirmDeduction').off('click').on('click', function() {
                            var currentUrl = window.location.href;
                            var pathToCheck = '/html-to-pdf/create';

                            if (currentUrl.includes(pathToCheck)) {
                                        $('#loadingModal').modal('show');

                                var formData = new FormData($(convertForm)[0]);
                                // Submit the form via AJAX
                                $.ajax({
                                    url: convertForm.attr('action'),
                                    method: convertForm.attr('method'),
                                    data: formData,
                                                                        processData: false, // Important for file uploads
                                    contentType: false, // Important for file uploads

                                    headers: {
                                        'X-CSRF-TOKEN': getCsrfToken()
                                    },
                                    success: function(response) {
                                        if (response) {
                                            // Handle success (e.g., show a success message)
                                            $('#htmlContent').html(response);
                                             setTimeout(function() {
            CreatePDFfromHTML();

                                            
           
        }, 50000); 
                   

                                        } else {
                                           console.error('Upload failed:');
                                        }
                                        // Manually hide the modal after form submission
                                        balanceModal.hide();
                                    },
                                    error: function(xhr) {
                                        if (xhr.status === 422) {
                                            var errors = xhr.responseJSON.errors;
                                            showErrorMessages(errors);
                                        } else {
                                            alert('An error occurred. Please try again.');
                                        }
                                        // Manually hide the modal after form submission
                                        balanceModal.hide();
                                    }
                                });
                            } else {
                                // Perform a normal form submission
                                convertForm.submit();
                            }
                            balanceModal.hide();
                        });

                        $('#addBalance').off('click').on('click', function() {
                            // Redirect to add balance page or show a modal for adding balance
                            window.location.href = "{{ route('addBalancePage') }}"; // Replace with actual route
                        });

                    } else {
                        alert('Unable to retrieve balance information. Please try again.');
                    }
                },
                error: function() {
                    alert('An error occurred. Please try again.');
                }
            });
        }

        $('#convertButton').on('click', function() {
            var isAuthenticated = {{ Auth::check() ? 'true' : 'false' }};
            if (isAuthenticated) {
                handleBalanceCheckAndConfirm();
            } else {
                loginModal.show();
            }
        });

        $('#loginForm').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                url: $(this).attr('action'),
                method: $(this).attr('method'),
                data: $(this).serialize(),
                headers: {
                    'X-CSRF-TOKEN': getCsrfToken()
                },
                success: function(response) {
                    if (response.success) {
                        // Update CSRF token in meta tag after login
                        var newCsrfToken = response.new_csrf_token;
                        $('meta[name="csrf-token"]').attr('content', newCsrfToken);
                        // Update CSRF token in convertForm
                        updateCsrfTokenInForm(newCsrfToken);
                        loginModal.hide();
                        handleBalanceCheckAndConfirm();
                    } else {
                        showErrorMessages(response.errors);
                    }
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        var errors = xhr.responseJSON.errors;
                        showErrorMessages(errors);
                    } else {
                        alert('An error occurred. Please try again.');
                    }
                }
            });
        });

        function showErrorMessages(errors) {
            $('.error-message').remove();
            for (var field in errors) {
                if (errors.hasOwnProperty(field)) {
                    var errorMessage = errors[field][0];
                    var inputField = $('#' + field);
                    inputField.addClass('is-invalid');
                    inputField.after('<div class="error-message text-danger">' + errorMessage + '</div>');
                }
            }
        }
         // Handle click on 'Download as PDF' button
            $('#download-pdf').click(function() {
               CreatePDFfromHTML();
            });

            // Create PDF from HTML...
            function CreatePDFfromHTML() {
                var HTML_Width = $(".html-content").width();
                var HTML_Height = $(".html-content").height();
                var top_left_margin = 15;
                var PDF_Width = HTML_Width + (top_left_margin * 2);
                var PDF_Height = (PDF_Width * 1.5) + (top_left_margin * 2);
                var canvas_image_width = HTML_Width;
                var canvas_image_height = HTML_Height;

                var totalPDFPages = Math.ceil(HTML_Height / PDF_Height) - 1;

                html2canvas($(".html-content")[0]).then(function (canvas) {
                    var imgData = canvas.toDataURL("image/jpeg", 1.0);
                    var pdf = new jsPDF('p', 'pt', [PDF_Width, PDF_Height]);
                    pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin, canvas_image_width, canvas_image_height);
                    
                    // Add more pages for overflow content
                    for (var i = 1; i <= totalPDFPages; i++) { 
                        pdf.addPage(PDF_Width, PDF_Height);
                        pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height*i)+(top_left_margin*4), canvas_image_width, canvas_image_height);
                    }

                    // Save the generated PDF
                    pdf.save("Your_PDF_Name.pdf");
                    $(".html-content").hide();
                });
                        $('#loadingModal').modal('hide');

            }
    });
    

</script>
