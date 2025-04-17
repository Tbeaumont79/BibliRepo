import { defineConfig } from "vite";
import usePHP, { EPHPError } from "vite-plugin-php";
import tailwindcss from "@tailwindcss/vite";
export default defineConfig({
	plugins: [
		usePHP({
			entry: [
				"*.php",
				"app/**/*.php",
				"app/dashboard/book/*.php",
				"app/dashboard/authors/*.php",
			],
			dev: {
				errorLevels: EPHPError.ERROR | EPHPError.WARNING | EPHPError.STRICT,
				cleanup: false,
			},
		}),
		tailwindcss(),
	],
});
