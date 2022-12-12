@extends('master')

@section("content")
    <div class='container'>
        <div class='card bg-secondary'>
            <h2>Login</h2>
            <form class='simple-form' action="login" method="POST">
                @csrf
                <input class='form-input' required name="name" type='text' id='first-name' placeholder='First Name' pattern="[A-Za-z]{2,20}" title="Name must be maximum 20 characters"></input>
                <div class='explainer'>Name must be no longer than 20 characters</div>

                <input required class='form-input optional' name="email" type='email' id='email' placeholder='Email'></input>
                <input required class='form-input' name="password" type='password' id='password' placeholder='Password'></input>

                <button class="btn btn-warning" type="submit">Login</button>
            </form>
        </div>
    </div>

    <style>
        html, body {
        background-color: rgb(3, 3, 22);
        height: 100%;
        width: 100%;
        }

        *,
        ::before,
        ::after {
            font-family: "Inter", sans-serif;
            border: none;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --neongreen: rgb(49, 254, 22);
            --blue: hsl(240deg 75% 60%);
            --purple: hsl(260deg 75% 65%);
            --lightgray: hsl(240 10% 70%);
            --red: hsl(320deg 75% 60%);
            --blueshadow: hsl(230deg 50% 50% / 0.4);
            --field: hsl(240deg 30% 15%);
        }

        .container {
            height: 100%;
            padding: 4rem;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        .card {
            border: 0.25rem solid #a46dc3;
            border-radius: 1rem;
            padding: 2rem;
            max-width: 400px;
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            flex: 1 1 auto;
            justify-items: center;
            align-items: center;
            box-shadow: 5px 15px 70px 5px var(--blueshadow);
        }

        .card h2 {
            color: white;
            flex: 0 1 0;
            padding: 0;
            font-size: 1.8rem;
            font-weight: 700;
            line-height: 1.5rem;
        }

        form {
            display: flex;
            width: 100%;
            flex-flow: column wrap;
            gap: 1rem;
            align-content: center;
        }

        form input {
            border-radius: 0.5rem;
            padding: 0.75rem;
            font-size: 1rem;
            width: 100%;
            flex-grow: 1;
            min-width: 200px;
            outline: none;
            background-color: var(--field);
            color: white;
        }

        .explainer {
            color: white;
            font-weight: 200;
            font-size: 0.9rem;
            line-height: 1.2rem;
            text-align: center;
        }

        form input::placeholder {
            color: var(--lightgray);
        }

        form input:has(+ .explainer) {
            margin-bottom: -0.5rem;
        }

        form input:focus {
            outline: 3px solid var(--blue);
            border: none;
        }

        form input:valid {
            outline: 3px solid var(--blue);
        }

        form input:is(:required):is(:invalid):not(:focus, .optional) {
            outline: 3px solid var(--blue);
            border: none;
        }

        .bottom {
            flex: 0 1 auto;
            width: 100%;
        }

        label,
        label > *,
        input {
            cursor: pointer;
        }

        .label-button {
            width: 100%;
            background-color: var(--neongreen);
            border-radius: 1rem;
            transition: background-color 400ms ease-in-out;
            padding-block: 2rem;
            position: relative;
            display: flex;
            align-items: center;
        }

        .label-button:before,
        .label-button:after {
            color: white;
            position: absolute;
            width: 100%;
            display: flex;
            justify-content: center;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            transition: all 400ms ease-in-out;
        }

        .label-button:after {
            content: "Saved!";
            opacity: 0;
            color: var(--darkblue);
        }

        .label-button:before {
            content: "Save";
            opacity: 1;
            color: white;
        }

        input[type="checkbox"] {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 1rem;
            margin: auto;
        }

        input:disabled, .label-button:has(input:disabled) {
            cursor: not-allowed;
        }

        .label-button:has(input:checked) {
            background-color: var(--purple);
        }

        .label-button:has(input:checked)::before {
            opacity: 0;
        }

        .label-button:has(input:checked)::after {
            opacity: 1;
        }

        /* Show or Hide the checkbox for positioning */
        input[type="checkbox"] {
            opacity: 0;
        }
    </style>
    
@endsection
