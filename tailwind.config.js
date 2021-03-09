module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {},
        backgroundSize: {
            'auto': 'auto',
            'cover': 'cover',
            'contain': 'contain',
            'full': '100%',
            '16': '4rem',
        }
    },
    variants: {
        extend: {
            height: ["responsive", "hover", "focus", "group-hover"],
            padding: ["group-hover"],
            margin: ["group-hover"],
            width: ["responsive", "hover", "focus", "group-hover"],
            borderRadius: ["responsive", "hover", "focus", "group-hover"],
        },
    },
    plugins: [],
}
