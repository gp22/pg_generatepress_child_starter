module.exports = {
	purge: ["**/*.php"],
	darkMode: false, // or 'media' or 'class'
	theme: {
		colors: {
			black: "#181819",
			white: "#fff",
			blue: {
				100: "#cdecf6",
				200: "#9ad9ec",
				300: "#68c5e3",
				400: "#35b2d9",
				500: "#039fd0", // primary
				600: "#027fa6",
				700: "#025f7d",
				800: "#014053",
				900: "#01202a",
				secondary: "#02d8ed",
			},
			gray: {
				100: "#f4f5f9",
				200: "#dcdde0",
				300: "#c3c4c7",
				400: "#abacae",
				500: "#929395",
				600: "#7a7b7d",
				700: "#626264",
				800: "#49494b",
				900: "#313132",
			},
		},
		fontSize: {
			tiny: ".555rem",
			xs: ".702rem",
			sm: ".889rem",
			base: "1rem",
			lg: "1.125rem",
			xl: "1.266rem",
			"2xl": "1.424rem",
			"3xl": "1.602rem",
			"4xl": "1.802rem",
			"5xl": "2.027rem",
			"6xl": "2.281rem",
			"7xl": "3.247rem",
			"8xl": "3.653rem",
			"9xl": "4.11rem",
		},
		extend: {},
	},
	corePlugins: {
		// disable container so it doesn't conflict with the generatepress container
		container: false,
	},
	variants: {
		extend: {},
	},
	plugins: [],
};
