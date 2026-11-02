---
marp: true
theme: default
paginate: true
---


<style>
/* General slide style */
section {
    background-color: #f8fafc;
    color: #1e293b;
    font-family: Arial, sans-serif;
    padding: 45px 65px;
    font-size: 23px;
}

/* Headings */
h1 {
    color: #0f172a;
    font-size: 38px;
}

h2 {
    color: #334155;
    font-size: 30px;
}

h3 {
    color: #475569;
    font-size: 25px;
}

/* Cover slide */
section.cover {
    background-color: #0f172a;
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 35px 60px;
}

section.cover h1 {
    color: white;
    font-size: 48px;
    margin: 20px 0 10px;
}

section.cover h3 {
    color: #cbd5e1;
    font-size: 24px;
    margin: 10px 0 25px;
}

section.cover p {
    color: white;
    font-size: 19px;
    margin: 7px;
}

/* Logos */
.logo-container {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 55px;
    margin-bottom: 15px;
}

.logo-container img {
    width: 125px;
    height: 90px;
    object-fit: contain;
}

/* Tables */
section table {
    width: 100%;
    font-size: 22px;
    border-collapse: collapse;
}

section th {
    background-color: #0f172a;
    color: white;
}

section th,
section td {
    padding: 10px;
    border: 1px solid #cbd5e1;
}

/* Images */
section img {
    object-fit: contain;
}

/* Pagination */
section::after {
    color: #64748b;
    font-size: 14px;
}
</style>

<!-- _class: cover -->
<div class="cover" >



![height:100px](images/Logo-OFPPT.jpg)
![height:100px](images/solicodeLogo.jpg)


#  DESTINATION GUIDE

### Discover Morocco, One Destination at a Time.

<br>

**Technical Project Presentation**
**Prepared by:** Mounir L Maimouni
**Supervised by:** E-sseraj Fouad

</div>

---
# Introduction


Destination Guide is a web application designed to help visitors
discover the beauty of Morocco and explore its tourist destinations.

- Discover tourist destinations.
- Explore cultural, historical, and natural attractions.
- Access useful information about each destination.
- Manage destinations through a private dashboard. manage destination information easily.

---
# The Need – Problem Statement

Morocco has many beautiful tourist destinations, but visitors may struggle to find organized and reliable information about these places.

**Main Problems:**
- Tourist information is scattered across different sources.
- Visitors may have difficulty discovering new destinations.
- Finding useful details about destinations can take time.
- Managing destination information manually can be difficult for the Tour Guide.

**Our Solution:**

Destination Guide brings destination information together in one platform, making it easier for visitors to explore Morocco.

---

# Analysis – Requirements and Features

### Visitor
- Browse tourist destinations.
- View destination details.
- Explore Morocco without an account.

### Tour Guide
- Log in to the dashboard.
- Add new destinations.
- Edit destination information.
- Delete destinations.
- Manage profile information.

---

### Main Functionalities
- Public destination listing.
- Destination management (CRUD).
- Private dashboard.
- Authentication.

**Main Actors:** Visitor and Tour Guide.

---

# Conception – System Design

The conception phase defines the structure and organization of the Destination Guide application.

---

# 1. Use Case Diagram
![height:500px](images/diagrame_de_classe.png)

---

# 2. Class Diagram
![height:500px](images/diagrame_de_classe.png)

---
# Réalisation – Technical Implementation

### Technologies Used :
<br>

| frontend | backend |
|----------|---------|
|    HTML  |   PHP   |
| Tailwind |   JSON  |
| javascript |       |

<br>

- **HTML5:** Structures the web pages.
- **Tailwind CSS:** Provides responsive styling.
- **JavaScript:** Handles user interactions.
- **PHP:** Manages backend operations.
- **JSON:** Stores application data.

---
# Next step: Réalisation – Application Screenshots
 ![height:500px](images/destination_screen.png)

---
 # Tour Guide Dashboard screenshot :
 ![height:500px](images/dashbord-screenshot.png)
 ---
# Conclusion

Destination Guide is a web application that helps visitors
discover and explore tourist destinations in Morocco.

