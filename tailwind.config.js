module.exports = {
    purge: [],
    darkMode: false, // or 'media' or 'class'
    theme: {
        // Add extensions to the default tailwind css config
        extend: {
            colors: {
                primary: "#333333",
                secondary: "#00C896",
                accent: "#54C3FD",
                third: "#FF7B98",
            },
            fontFamily: {
                body: ["Karma"],
                title: ["Istok Web"],
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
