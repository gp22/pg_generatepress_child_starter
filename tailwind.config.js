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
			green: {
				500: "#64f000",
			},
			orange: {
				500: "#ff8300", // extra color 2
			},
			red: {
				500: "#f30041", // extra color 1
			},
			violet: {
				500: "#320ad8", // action
			},
			yellow: {
				500: "#ffcf00", // extra color 3
			},
		},
		fontSize: {
			xs: ".694rem",
			sm: ".833rem",
			base: "1rem",
			lg: "1.2rem",
			xl: "1.44rem",
			"2xl": "1.728rem",
			"3xl": "2.074rem",
			"4xl": "2.488rem",
			"display-1": "2.986rem",
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
