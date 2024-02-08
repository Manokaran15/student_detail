<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <!-- Bootstrap links -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Bootstrap links -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        
        <link rel="stylesheet" href="<?php echo e(asset('/css/style.css')); ?>">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />

        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

        

        <title>Register Page</title>

    </head>
    <body>
        <!-- Start Header Section -->
        <header></header>
        <!-- End Header Section -->

        <!-- Start Main Section -->
        <main>
            <div class="register">
                <div class="register_content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-6 text-center pt-5 pb-3">
                                <h2 class="heading-section">Register</h2>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-lg-8">
                                <form class="ps-3 pe-3 form" method="post" action="/register" name="myForm" id="register_form">
                                    <?php echo csrf_field(); ?>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-6 pb-4">
                                            <input type="text" name="name" placeholder="Name" id="name" value="" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> rounded-pill">
                                            <?php if($errors->has('name')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-md-12 col-lg-6 pb-4">
                                            <input type="text" name="email" placeholder="E-mail" id="email" value="" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> rounded-pill">
                                            <?php if($errors->has('email')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-6 pb-4">
                                            <input type="text" name="user_name" placeholder="User Name" id="user_name" value="" class="form-control <?php $__errorArgs = ['user_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> rounded-pill">
                                            <?php if($errors->has('user_name')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('user_name')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-md-12 col-lg-6 pb-4">
                                            <input type="text" name="phone_number" placeholder="Phone Number" id="phone_number" value="" class="form-control <?php $__errorArgs = ['phone_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> rounded-pill">
                                            <?php if($errors->has('phone_number')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('phone_number')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-6 pb-4">
                                            <input type="password" name="password" placeholder="Password" id="my_password" value="" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> rounded-pill">
                                            <?php if($errors->has('password')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-md-12 col-lg-6 pb-4">
                                            <input type="password" name="confirm_password" placeholder="Confirm Password" id="confirm_password" value="" class="form-control <?php $__errorArgs = ['confirm_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> rounded-pill">
                                            <?php if($errors->has('confirm_password')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('confirm_password')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="text-white">
                                        <input type="checkbox" id="myfunction"> Show Password
                                    </div>
                                    <div class="d-flex justify-content-center pt-3 pb-3">
                                        <input type="submit" id="register" value="REGISTER" class="btn btn-primary rounded-pill">
                                    </div>
                                    <div class="d-flex justify-content-center pb-3">
                                        <a class="text-white" href="/">Already Register</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- End Main Section -->

        <!-- Start Footer Section -->
        <footer>

        </footer>
        <!-- End Footer Section -->

        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"  crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>

        <script src="<?php echo e(asset('/js/student.js')); ?>"></script>
    </body>
</html>

<?php /**PATH C:\xampp\htdocs\studentmark\resources\views/auth/register.blade.php ENDPATH**/ ?>