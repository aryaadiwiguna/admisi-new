module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        fontFamily: {
            sans: ['"Inter var", sans-serif, "Georgia"'],
        },
        extend: {},
    },
    plugins: [require("flowbite/plugin")],
};
