<!DOCTYPE html>
<html lang="en">
    
    <?php
        require_once("header.php");
    ?>
    
        <div class="container">
            <form class="row g-3 needs-validation" novalidate>
                <div class="col-md-6">
                    <label for="validationCustom01" class="form-label">First name</label>
                    <input type="text" name="firstName" class="form-control" id="validationCustom01" placeholder="First name" required>
                    <div class="invalid-feedback">
                        Please enter your first name.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">Last name</label>
                    <input type="text" name="lastName" class="form-control" id="validationCustom02" placeholder="Last name" required>
                    <div class="invalid-feedback">
                        Please enter your last name.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustomEmail" class="form-label">Email</label>
                    <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="Email" name="Email" class="form-control" id="validationCustomEmail" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Please enter a valid email address.
                    </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustomPassword" class="form-label">Password</label>
                    <div class="input-group has-validation">
                    <input type="Password" name="Password" class="form-control" id="validationCustomPassword" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Please choose a password.
                    </div>
                    </div>
                </div>
                
                <div class="col-12">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
            </form>
        </div>
        
        <?php
            require_once("footer.php");
        ?>

        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
                })
            })()

        </script>

    
</html>