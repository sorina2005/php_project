# Modular PHP Web Platform - Custom Architecture

## Executive Summary
This project is a custom-built web application developed using **Modular PHP**, focusing on a clean separation of concerns and a structured directory hierarchy. Unlike framework-based solutions, this platform utilizes a **bespoke architecture** to manage database interactions, API endpoints, and frontend rendering, demonstrating a deep understanding of core web technologies and backend logic integration.

## Technical Architecture
The system is designed with a modular approach to ensure maintainability and scalability:

* **Core Logic (App Layer)**:
    * **Database Abstraction**: Centralized connection management located in `app/conn/conn.php`.
    * **Endpoint Logic**: Dedicated directory for API and authentication endpoints, such as the `login_register` module.
    * **Shared Components**: Reusable logic and business modules (e.g., `diets.php`, `aboutus.php`, `modal.php`) residing in the `app/model/shared` directory.

* **Resource Management**:
    * **Frontend Assets**: Organized storage for CSS, images, and JavaScript within the `resources` directory.
    * **Behavioral Scripts**: Specialized JavaScript files (e.g., `api_script.js`, `modal_script.js`, `contact_script.js`) that handle asynchronous interactions and DOM manipulation.
    * **View Layer**: Segregated HTML and view templates, such as `api_index.html`, ensuring the logic remains decoupled from the UI.

* **Public Entry Point**:
    * The application utilizes a secure entry point via `public/index.php`, protecting the internal system structure from direct web access.

## Key Features
* **Authentication System**: Custom implementation of user registration and login flows managed through backend endpoints.
* **Dynamic Content Management**: Specialized modules for managing specific data sets, such as dietary information (`diets.php`).
* **Asynchronous Interactions**: Integration of AJAX-style scripts to facilitate seamless communication between the frontend and the `app/model/endpoint` logic.
* **Modular UI Components**: Use of shared modals and contact components across different views to ensure code reusability.



## Repository Structure
The project follows a rigorous organizational standard:
```text
app/
 ├── conn/          # Database connection strings and drivers
 ├── model/         # Business logic and data endpoints
 │    └── shared/   # Reusable logic modules (Diets, Contact, About)
resources/          # Static assets (CSS, JS, Images)
view/               # UI Templates and HTML views
public/             # Publicly accessible directory and entry point
