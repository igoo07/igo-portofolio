import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    // Tambahkan baris ini untuk mengaktifkan dark mode berbasis class (html.light / html.dark)
    darkMode: 'class',

    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                // Menambahkan font Plus Jakarta Sans agar bisa dipakai lewat class Tailwind
                sans: ['Plus Jakarta Sans', 'Figtree', ...defaultTheme.fontFamily.sans],
                mono: ['JetBrains Mono', ...defaultTheme.fontFamily.mono],
            },
            colors: {
                // Anda bisa menambahkan custom colors di sini jika diperlukan
                dark: {
                    main: '#020617',
                    card: 'rgba(15, 23, 42, 0.7)',
                }
            }
        },
    },

    plugins: [forms],
};