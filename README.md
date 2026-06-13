# Cloud-Based Data Redundancy Removal System

## Overview

The Cloud-Based Data Redundancy Removal System is designed to detect duplicate records before storing them in a centralized cloud database.

---

## Technologies Used

- PHP
- MySQL
- HTML
- CSS

---

## Cloud Platform Support

- InfinityFree
- AWS EC2 + RDS
- Microsoft Azure
- Google Cloud Platform

---

## Features

- Add Records
- Detect Duplicate Records
- View Records
- Dashboard Analytics

---

## Project Structure

```text
index.php
insert.php
view.php
dashboard.php
db.php
style.css
database.sql
```

---

## Architecture

User

↓

Cloud Web Application

↓

Duplicate Detection Module

↓

Cloud Database

---

## Cloud Deployment

This project is designed to be deployed on cloud platforms such as InfinityFree, AWS, Azure and Google Cloud.

For cloud deployment, only the database credentials inside `db.php` need to be updated according to the credentials provided by the hosting platform. No changes to the application logic are required.

---

## Future Enhancements

- InfinityFree Deployment
- AWS EC2 Deployment
- AWS RDS Integration
- AI-Based Duplicate Detection
