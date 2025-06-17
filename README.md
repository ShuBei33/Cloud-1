# ☁️ Cloud-1 — Stack WordPress automatisée
  
L’objectif est de déployer automatiquement une stack complète WordPress + MariaDB + Nginx sur un serveur distant (Scaleway), via Docker et Ansible.

---

## 🧱 Stack déployée

- 🐳 **Docker** & **Docker Compose**
- 🧰 **Ansible**
- 🗃️ **MariaDB** (base de données)
- 📝 **WordPress** (via PHP-FPM)
- 🌐 **Nginx** (reverse proxy)
- ☁️ **Scaleway** (instance cloud)

---

## 📁 Arborescence du dépôt

.
├── inventory.ini
├── roles
│   ├── Makefile
│   └── srcs
│       ├── files
│       │   └── inception
│       │       ├── docker-compose.yml
│       │       └── requirements
│       │           ├── mariadb
│       │           │   ├── conf
│       │           │   │   └── mydb.conf
│       │           │   ├── Dockerfile
│       │           │   └── tools
│       │           │       └── entrypoint.sh
│       │           ├── nginx
│       │           │   ├── conf
│       │           │   │   └── mynginx.conf
│       │           │   └── Dockerfile
│       │           └── wordpress
│       │               ├── conf
│       │               │   └── www.conf
│       │               ├── Dockerfile
│       │               └── tools
│       │                   └── setup.sh
│       └── tasks
│           └── main.yml
└── site.yml


---

Projet non terminé readme in progress...
