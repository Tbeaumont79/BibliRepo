import { defineConfig } from "vite";
import usePHP from "vite-plugin-php";
import tailwindcss from "@tailwindcss/vite";
export default defineConfig({
	plugins: [
		usePHP({
			entry: [
				"index.php",
				"app/auth/*.php",
				"app/dashboard/*.php",
				"app/dashboard/**/*.php",
				"app/databases/*.php",
				"app/utils/*.php",
			],
		}),

		tailwindcss(),
	],
});
