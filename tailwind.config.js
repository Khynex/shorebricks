module.exports = {
    important: true,
    content: [],
    theme: {
        extend: {
            colors: {
                body: "#17171F",
                "selected-text": "#A3A3FF",
                theme: "#3F3FFF",
                nav: "#404053",
                secondary: "#9191A4",
                badge: "#3F3F51",
                compcolor: "#e25822",
                input: "#2A2A35",
                hero: "#094b",
                facebook: "#3b5998",
                instagram: "#fb3958"
            },
            fontFamily: {
                poppins: ["Poppins"],
                nunito: ["Nunito"],
                rancho: ["Rancho"]
            },
            margin: {
                '112': '128rem'
            },
            width: {
                '800': '800px',
                '500': '500px',
                '5000': '500%',
            },
            backgroundImage: {
                'image1': "url('/img/house1.JPG')",
                'image2': "url('/img/house2.JPG')",
            },
            animation: {
                spin6: 'spin 6s linear infinite',
                wiggle6: 'wiggle 6s ease-in-out infinite',
                bounce3: 'bounce 3s infinite',
                bounce4: 'bounce 4s infinite',
                bounce5: 'bounce 5s infinite',
                bounce6: 'bounce 6s infinite',
                ping2: 'ping 2s infinite',
                ping3: 'ping 3s infinite',
                ping4: 'ping 4s infinite',
                ping5: 'ping 5s infinite'
            },
            transitionDuration: {
                '0': '0ms',
                '2000': '2000ms',
                '3000': '3000ms',
            }


        },

    },
    plugins: [require('@tailwindcss/aspect-ratio'),
        require('@tailwindcss/forms')
    ],
}