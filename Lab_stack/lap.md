---
marp: true
theme: default
paginate: true
---



<style>

/* ==============================
   1. GLOBAL PRESENTATION STYLE
================================ */

section {
    background: #f8fafc;
    color: #334155;
    font-family: "Segoe UI", Arial, sans-serif;
    font-size: 21px;
    padding: 48px 65px;
    line-height: 1.5;
}

/* ==============================
   2. HEADINGS
================================ */

section h1 {
    color: #0f172a;
    font-size: 38px;
    font-weight: 700;
    margin-bottom: 28px;
    padding-bottom: 12px;
    border-bottom: 3px solid #0d9488;
}

section h2 {
    color: #1e293b;
    font-size: 29px;
    font-weight: 650;
    margin-top: 15px;
    margin-bottom: 15px;
}

section h3 {
    color: #0f766e;
    font-size: 23px;
    font-weight: 600;
    margin-top: 20px;
    margin-bottom: 12px;
}

/* ==============================
   3. PARAGRAPHS
================================ */

section p {
    line-height: 1.65;
    margin-bottom: 16px;
}

/* ==============================
   4. LISTS
================================ */

section ul,
section ol {
    padding-left: 30px;
    margin-top: 12px;
    line-height: 1.6;
}

section li {
    margin-bottom: 9px;
    padding-left: 4px;
}

section li::marker {
    color: #0d9488;
    font-weight: bold;
}

/* ==============================
   5. TABLES
================================ */

section table {
    width: 100%;
    border-collapse: collapse;
    font-size: 19px;
    margin-top: 20px;
}

section th {
    background: #0f172a;
    color: #ffffff;
    font-weight: 600;
}

section th,
section td {
    border: 1px solid #cbd5e1;
    padding: 12px 15px;
    text-align: left;
}

section tr:nth-child(even) {
    background: #e2e8f0;
}

/* ==============================
   6. IMAGES
================================ */

section img {
    object-fit: contain;
    max-width: 100%;
}

/* ==============================
   7. COVER SLIDE
================================ */

section.cover {
    background: #0f172a;
    color: #f8fafc;
    text-align: center;
    justify-content: center;
    align-items: center;
    padding: 45px 65px;
}

section.cover h1 {
    color: #ffffff;
    font-size: 46px;
    font-weight: 800;
    border: none;
    margin-top: 25px;
    margin-bottom: 15px;
}

section.cover h2 {
    color: #5eead4;
    font-size: 25px;
    font-weight: 500;
}

section.cover h3 {
    color: #5eead4;
    font-size: 23px;
}

section.cover p {
    color: #cbd5e1;
    font-size: 18px;
    margin-bottom: 8px;
}

/* ==============================
   8. LOGO CONTAINER
================================ */

.logo-container {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}

.logo-container img {
    height: 150px;
    width: 150px;
    object-fit: contain;
    border-radius: 0;
}

/* ==============================
   9. INTRODUCTION
================================ */

section.intro {
    justify-content: center;
}

.intro-text {
    background: #e2e8f0;
    border-left: 5px solid #0d9488;
    border-radius: 5px;
    padding: 25px 30px;
    font-size: 24px;
    line-height: 1.7;
    color: #1e293b;
}

/* ==============================
   10. PRESENTATION PLAN
================================ */

.plan-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    margin-top: 30px;
}

.plan-item {
    background: #e2e8f0;
    border-left: 4px solid #0d9488;
    padding: 18px 20px;
    border-radius: 5px;
    color: #0f172a;
    font-size: 20px;
    font-weight: 600;
}

/* ==============================
   11. TECHNICAL STACK
================================ */

.stack-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

.stack-item {
    background: #e2e8f0;
    border-radius: 6px;
    padding: 18px 22px;
    border-top: 4px solid #0d9488;
}

.stack-item h3 {
    margin-top: 0;
    color: #0f172a;
}

.stack-item p {
    font-size: 19px;
    margin-bottom: 0;
}

/* ==============================
   12. LABS SLIDE
================================ */

section.labs {
    font-size: 17px;
    padding: 35px 48px;
}

section.labs h1 {
    font-size: 35px;
    margin-bottom: 22px;
}

.labs-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}

.labs-grid div {
    font-size: 17px;
    line-height: 1.5;
}

.labs-grid ol {
    padding-left: 25px;
    margin-top: 0;
}

.labs-grid li {
    margin-bottom: 5px;
}

/* ==============================
   13. SLIDE NUMBER
================================ */

section::after {
    color: #64748b;
    font-size: 13px;
    font-weight: 500;
}

</style>



<!-- _class: cover -->
<div align="center">

<!-- _class: cover -->

<div class="logo-container">

![OFPPT](images/Logo-OFPPT.jpg)

![Solicode](images/solicodeLogo.jpg)

</div>


# LABS & TECHNICAL STACK

### Discovering Tools, Technologies and Methodologies

<br>

**Technical Project Presentation**

**Prepared by:** Mounir L Maimouni

**Supervised by:** E-sseraj Fouad

**Training Center:** Solicode Tanger

</div>

---



# Introduction

In this presentation, we will discover the Labs and the technical stack of our technical project.

We will understand how Labs help us discover new tools, test solutions, develop our technical skills, and contribute to the project.

---

# Presentation Plan

1. Technical Project
2. Technical Stack
3. Understanding Labs
   - What is a Lab?
   - Why Conduct Labs?
   - Link with the Technical Project
4. List of Labs

---

# Technical Project

## Destination Guide

Destination Guide is a web application designed to help users discover tourist destinations in Morocco.

### Main Objectives

- Discover different tourist destinations.
- Explore cultural, historical, and natural attractions.
- Access useful information about each destination.
- Allow the Tour Guide to manage destination information.

---

# Technical Stack

### Frontend
- JavaScript
- Alpine.js
- Tailwind CSS
- Preline

### Backend
- PHP
- Laravel

### Database
- MySQL

### Programming Language
- Kotlin

---


# Understanding Labs

### What is a Lab?

A Lab is a practical method that allows us to apply what we have learned in theory and improve our skills.

### Why Conduct Labs?

- Discover new tools and technologies.
- Test solutions through practical exercises.
- Develop technical and problem-solving skills.
- Gain experience before applying tools to real projects.

### Link with the Technical Project

Labs help us explore and test technologies and solutions that can be used to develop and improve our technical project.




---

# List of Labs

<!-- _class: labs -->

<div class="labs-grid">

<div>

1. Qu’est-ce qu’un lab ?
2. Markdown
3. GitHub Pages
4. Antigravity
5. Marp
6. OpenCode
7. Pandoc
8. OmniRoute
9. 2Tup
10. Design Thinking

</div>

<div>

11. Scrum
12. OOP
13. Copilot
14. Laravel
15. Preline
16. Git
17. ASCII
18. PHP Native
19. Kotlin

</div>

<div>

20. ES7 JavaScript
21. Prompt-Agent-Skills
22. Communication avec IA
23. Starter
24. Planning
25. Stack
26. Veille technologique
27. Errors JS
28. Agent

</div>

</div>
