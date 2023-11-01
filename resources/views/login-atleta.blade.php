@extends('layout')
@section('cabecalho')
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Patua+One&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <style>
      body {
        font-family: "Roboto", sans-serif;
      }
      h1,
      h2,
      h3,
      h4,
      h5,
      h6,
      [data-calendar] {
        font-family: "Patua One", serif;
      }
      #logo {
        text-transform: uppercase;
        font-size: 1.5rem;
        font-weight: bold;
        margin-left: 5px;
      }
      .debug {
        outline: 1px solid red;
      }
    </style>
    <title>Campeonato de Jiu Jitsu</title>
  </head>
@endsection
@section('conteudo')
<main class="bg-gray-50">
    <div
    class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-[80vh] lg:py-0"
    >
    <a
        href="#"
        class="flex items-center mb-6 text-2xl font-semibold text-gray-900"
    >
        <img class="w-8 h-8 mr-2" src="../imgs/logo.svg" alt="logo" />
        <p id="logo">OSU BJJ</p>
    </a>
    <div
        class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0"
    >
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
        <h1
            class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl"
        >
            Entre na sua conta
        </h1>
        <form class="space-y-4 md:space-y-6" action="#">
            <div>
            <label
                for="email"
                class="block mb-2 text-sm font-medium text-gray-900"
                >Seu Email</label
            >
            <input
                type="email"
                name="email"
                id="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                placeholder="larusso@miyagido.com"
                required=""
            />
            </div>
            <div>
            <label
                for="senha"
                class="block mb-2 text-sm font-medium text-gray-900"
                >Senha</label
            >
            <input
                type="password"
                name="senha"
                id="senha"
                placeholder="**********"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                required=""
            />
            </div>
            <div class="flex items-center justify-between">
            <a
                href="#"
                class="text-sm font-medium text-primary-600 hover:underline"
                >Esqueceu sua senha?</a
            >
            </div>
            <button
            type="submit"
            class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            >
            Entrar
            </button>
        </form>
        </div>
    </div>
    </div>
</main>
@endsection