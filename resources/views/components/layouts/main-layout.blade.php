<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        /* Definindo a animação customizada */
        @keyframes aparecer {
            0% {
                opacity: 0;
            }
            20% {
                opacity: 1;
            }
            80% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }

        /* Usando a animação */
        .animacao-temporaria {
            animation: aparecer 5s forwards;
        }
    </style>
</head>
<body class="bg-zinc-900/95 min-h-screen flex justify-center items-center">
    
    {{ $content }}

</body>
</html>