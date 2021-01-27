module.exports = {
    purge: [],
    darkMode: false, // or 'media' or 'class'
    theme: {
        // Add extensions to the default tailwind css config
        extend: {
            colors: {
                primary: "#1C4F6A",
                secondary: "#EA9A28",
                accent: "#04070E",
            },
            fontFamily: {
                body: ["Montserrat"],
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
