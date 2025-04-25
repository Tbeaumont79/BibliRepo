# BibliRepo

## Réalisation d'un CRUD en PHP

Projet Réalisé dans le cadre de ma formation à DonkeySchool.

**Stack tecnique :** PHP et Vite (bonus)

Why i choose to use Vite ? First for the Developper Experience Vite has the HMR, and also i'v used it to run tailwind on my project.

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
└── vite.config.js
├── package.json
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
