import tailwindcss from "@tailwindcss/vite";
import { defineConfig } from "vite";
import usePHP, { EPHPError } from "vite-plugin-php";

export default defineConfig({
	plugins: [
		usePHP({
			entry: [
				"index.php",
				"src/login.php",
				"src/register.php",
				"./databases/db_connect.php",
			],
		}),
		tailwindcss(),
	],
});
