<!DOCTYPE html>
<html>
<head>
    <title>Campus Store Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header text-center">
                    <h4>Register User</h4>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Select Role</label>
                            <select name="role_id" class="form-control" required>
                                <option value="">-- Select Role --</option>
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}">
                                        {{ ucfirst($role->role_name) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">
                                Register
                            </button>
                        </div>

                    </form>
                </div>

                <div class="card-footer text-center">
                    <small>Campus Store Management System</small>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>