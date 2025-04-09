import tailwindcss from "@tailwindcss/vite";
import { defineConfig } from "vite";
import usePHP from "vite-plugin-php";

export default defineConfig({
	plugins: [
		usePHP({
			entry: ["*.php", "src/*/*.php", "./databases/db_connect.php"],
		}),
		tailwindcss(),
	],
});
