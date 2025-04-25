@extends('tablar::auth.layout')
@section('title', 'Register')
@section('content')
    <div class="container container-tight py-4">
        <div class="text-center mb-1 mt-5">
            <a href="" class="navbar-brand navbar-brand-autodark">
                <img src="{{ asset(config('tablar.auth_logo.img.path','assets/logo.svg')) }}" height="36" alt="">
            </a>
        </div>
        <form class="card card-md" action="{{ route('register') }}" method="post" autocomplete="off" novalidate>
            @csrf
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Crear una nueva cuenta</h2>
                <div class="mb-3">
                <label class="form-label">Selecciona el rol</label>
                <select name="rol" class="form-select @error('rol') is-invalid @enderror" required>
                    <option value="">-- Selecciona un rol --</option>
                    <option value="admin">Administrador</option>
                    <option value="usuario">Usuario</option>
                    <option value="editor">Editor</option>
                </select>
                @error('rol')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Ingresa tu nombre">
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Ingresa tu email">
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Contraseña</label>
                    <div class="input-group input-group-flat">
                        <input type="password" id="register_password" name="password"
                               class="form-control @error('password') is-invalid @enderror"
                               placeholder="Contraseña" autocomplete="off">
                        <span class="input-group-text">
                            <a href="#" class="link-secondary toggle-password" data-target="register_password" title="Mostrar contraseña" data-bs-toggle="tooltip">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                     viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <circle cx="12" cy="12" r="2"/>
                                    <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7
                                             c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7"/>
                                </svg>
                            </a>
                        </span>
                        @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Confirmar Contraseña</label>
                    <div class="input-group input-group-flat">
                        <input type="password" id="register_password_confirmation" name="password_confirmation"
                               class="form-control @error('password_confirmation') is-invalid @enderror"
                               placeholder="Confirma Contraseña" autocomplete="off">
                        <span class="input-group-text">
                            <a href="#" class="link-secondary toggle-password" data-target="register_password_confirmation" title="Mostrar contraseña" data-bs-toggle="tooltip">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                     viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <circle cx="12" cy="12" r="2"/>
                                    <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7
                                             c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7"/>
                                </svg>
                            </a>
                        </span>
                        @error('password_confirmation')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-check">
                        <input type="checkbox" name="terms" class="form-check-input" required>
                        <span class="form-check-label">
                            Acepto las <a href="#" tabindex="-1">Políticas y Términos</a>.
                        </span>
                    </label>
                </div>

                <div class="form-footer">
                    <button type="submit" class="btn btn-warning w-100">Registrar</button>
                </div>
            </div>
        </form>

        <div class="text-center text-muted mt-3">
            ¿Ya tienes una cuenta? <a href="{{ route('login') }}" tabindex="-1">Iniciar sesión</a>
        </div>
    </div>

    <!-- Script para mostrar/ocultar contraseñas -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const toggleButtons = document.querySelectorAll(".toggle-password");

            toggleButtons.forEach(button => {
                button.addEventListener("click", function (e) {
                    e.preventDefault();
                    const targetId = this.getAttribute("data-target");
                    const input = document.getElementById(targetId);

                    if (input) {
                        const type = input.getAttribute("type") === "password" ? "text" : "password";
                        input.setAttribute("type", type);
                        this.title = type === "text" ? "Ocultar contraseña" : "Mostrar contraseña";
                    }
                });
            });
        });
    </script>
@endsection
