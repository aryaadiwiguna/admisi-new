const { addDynamicIconSelectors } = require('@iconify/tailwind');

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
        "./src/*.html",
    ],
    theme: {
        fontFamily: {
            sans: ['"Inter var", sans-serif, "Georgia"'],
        },
        extend: {},
        color: {
            'midnight-blue' : '#001B36',
        },
    },
    plugins: [require("flowbite/plugin"), addDynamicIconSelectors()],
};
