# BibliRepo

## Description

This project is a simple web app to manage books and authors. It is a CRUD (Create, Read, Update, Delete) app done with PHP and Tailwind CSS for a DonkeySchool study project.

**Stack tecnique :** PHP et Vite (bonus)

Why i choose to use Vite ? First for the Developper Experience Vite has the HMR, and also i've used it to run tailwind on my project. It could be usefull to install other plugins in the future.

### Project architecture :

```
├── app
│   ├── auth
│   │   ├── login.php
│   │   ├── logout.php
│   │   └── register.php
│   ├── dashboard
│   │   ├── index.php
│   │   └── sideMenu.php
│   │   ├── authors
│   │   │   ├── addAuthors.php
│   │   │   ├── authors.php
│   │   │   └── updateAuthors.php
│   │   └── books
│   │       ├── addBooks.php
│   │       ├── books.php
│   │       └── updateBooks.php
│   ├── databases
│   │   ├── biblio.sql
│   │   ├── db_connect.php
│   ├── styles
│   │   ├── style.css
│   └── utils
│       ├── deleteElementFromTable.php
│       ├── getElementFromTable.php
│       ├── isAdmin.php
│       └── listElementFromTable.php
├── public
│   ├── assets
│   │   ├── icons
│   │   │   ├── bookLogo.svg
│   │   └── img
├── README.md
├── index.php
├── vite.config.js
└── package.json
```

### How to start the projet ?

first install the dependencies with :

```
npm install
```

then start the server with :

```
npm run dev
```

it will start a server on port 5173.

### Install the database :

in the databases folder you can find the database file `biblio.sql`, you can import it with :

```
mysql -u root < biblio.sql
```

### How to access to the Admin Panel ?

You have to be an admin user.

Create an account in the Sign Up page, then you can update the status is admin in the database.

```
UPDATE users SET is_admin = 1 WHERE id=1;
```

Then you can access to the Admin Panel by clicking on dashboard in the default page.