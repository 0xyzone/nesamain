import preset from "../../../../vendor/filament/filament/tailwind.config.preset";

export default {
    presets: [preset],
    content: [
        "./app/Filament/**/*.php",
        "./resources/**/*.blade.php",
        "./resources/views/filament/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
        "./vendor/rawilk/filament-quill/resources/css/custom.css",
    ],
    plugins: ["tailwindcss/nesting", "tailwindcss", "autoprefixer"],
};
