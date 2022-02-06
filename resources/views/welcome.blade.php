<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <style>
    body {
      font-family: 'Nunito';
    }

  </style>

</head>

<body class="background-color:blue">
  <x-app-layout>
    <div class="container mx-auto">
      <x-alert color="blue" class="mb-4 drop-shadow-lg">
        <x-slot name='title'>
          {{ __('Guarning') }}
        </x-slot>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum assumenda alias obcaecati distinctio error
        mollitia eius fuga sed itaque, doloribus quo dolor, doloremque deserunt harum suscipit inventore in sunt fugit
        amet voluptas dolorum at. Dignissimos ipsam iusto tempore earum pariatur reiciendis harum impedit quae eveniet
        autem.
      </x-alert>

      <x-alert2 color="blue" class="mb-4 drop-shadow-lg">
        <x-slot name='title'>
          {{ __('Guarning') }}
        </x-slot>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum assumenda alias obcaecati distinctio error
        mollitia eius fuga sed itaque, doloribus quo dolor, doloremque deserunt harum suscipit inventore in sunt fugit
        amet voluptas dolorum at. Dignissimos ipsam iusto tempore earum pariatur reiciendis harum impedit quae eveniet
        autem.
      </x-alert2>
    </div>
  </x-app-layout>
</body>

</html>
