# System Specification

## 1. Overview

This document defines the full system specification for a **WordPress-based SaaS platform** that provides **family portals and genealogy (family tree) management** for Vietnamese clans/families.

The system is designed as a **single WordPress installation with multi-tenant architecture**, where each tenant represents one family/clan. The platform targets Vietnamese users only and **supports Vietnamese language only** (no multi-language requirement).

The document is intended to be used as **input for automated code generation (e.g., Cursor)** and therefore emphasizes **clear data models, roles, permissions, and system behavior**.

---

## 2. Goals & Non-Goals

### 2.1 Goals

* Provide a SaaS platform where each family has its own portal website
* Allow families to manage genealogy data (family tree)
* Allow families to publish portal content (introduction, news, events, activities)
* Use WordPress core features as much as possible to reduce cost and development time
* Support subscription-based SaaS model

### 2.2 Non-Goals

* No multi-language support (Vietnamese only)
* No real-time collaboration (no Google Docs–style editing)
* No native mobile apps (web only)
* No complex graph analytics (basic genealogy tree only)

---

## 3. System Architecture

### 3.1 High-Level Architecture

* Single WordPress instance
* Custom plugin provides SaaS logic
* Custom theme provides frontend UI
* Multi-tenancy implemented at **data level**, not WordPress Multisite

```
Browser (Admin/User)
   ↓
WordPress Theme (Portal UI)
   ↓
Custom SaaS Plugin (Business Logic)
   ↓
WordPress Core (Users, Posts, Meta)
   ↓
MySQL / MariaDB
```

---

## 4. Tenant Model (Family / Clan)

### 4.1 Definition

* A **Family** is a tenant in the SaaS system
* All content, users, and genealogy data belong to exactly one family

### 4.2 Data Model

**Custom Post Type:** `family`

Fields:

* `id` (post ID)
* `family_name`
* `family_slug`
* `description`
* `founder_name`
* `origin_place`
* `created_at`
* `status` (active / suspended)

Each family has a **public portal page** and **private admin area**.

---

## 5. User & Role Management

### 5.1 User Roles

| Role          | Description                      |
| ------------- | -------------------------------- |
| super_admin   | SaaS owner, manages all families |
| family_admin  | Full control over one family     |
| family_editor | Can edit genealogy and content   |
| family_viewer | Read-only access                 |

### 5.2 User–Family Relationship

Each user is associated with exactly one family.

Stored as:

* `user_meta: family_id`

### 5.3 Permission Rules

* Users can only access data belonging to their own `family_id`
* `super_admin` bypasses all restrictions
* Enforcement via:

  * `map_meta_cap`
  * `pre_get_posts`

---

## 6. Content Management (Portal)

### 6.1 Custom Post Types

| CPT          | Purpose                        |
| ------------ | ------------------------------ |
| family_page  | Introduction, history, rules   |
| family_news  | News & announcements           |
| family_event | Events, ceremonies, activities |

All CPTs must include:

* Taxonomy: `family`

### 6.2 Taxonomy

**Taxonomy:** `family`

* Assigned to all family-related CPTs
* Used for data isolation and querying

---

## 7. Genealogy (Family Tree)

### 7.1 Custom Post Type

**CPT:** `family_member`

Represents one person in the family tree.

### 7.2 Data Fields (Post Meta)

| Field      | Type       | Description                        |
| ---------- | ---------- | ---------------------------------- |
| family_id  | int        | Owner family                       |
| father_id  | int        | Reference to another family_member |
| mother_id  | int        | Reference to another family_member |
| spouse_ids | array<int> | Spouse relationships               |
| birth_year | int        | Year of birth                      |
| death_year | int        | Year of death (nullable)           |
| generation | int        | Generation index                   |
| gender     | enum       | male / female                      |
| notes      | text       | Additional info                    |

### 7.3 Tree Rules

* One person has at most one father and one mother
* Multiple spouses allowed
* Circular references are forbidden
* All referenced members must belong to the same family

### 7.4 Tree Rendering

* Tree data exposed via WordPress REST API
* Frontend renders tree using JavaScript (D3.js or similar)
* Supports:

  * Zoom
  * Pan
  * Click to view profile

---

## 8. Frontend (Portal UI)

### 8.1 Public Pages

* Family home page
* Introduction page
* Family tree (read-only)
* News list & detail
* Events list & detail

### 8.2 URL Structure

```
/ho/{family-slug}/
/ho/{family-slug}/gioi-thieu
/ho/{family-slug}/gia-pha
/ho/{family-slug}/tin-tuc
```

Routing implemented via:

* Custom rewrite rules
* Query by `family` taxonomy

---

## 9. Admin Interface

### 9.1 Family Admin Dashboard

Features:

* Manage family profile
* Manage family members (genealogy)
* Manage portal content
* Manage users and roles
* View subscription status

### 9.2 Enhancements

* Custom admin columns
* Filter by family
* Bulk actions
* Custom genealogy tree admin page

---

## 10. SaaS Subscription & Billing

### 10.1 Subscription Model

* Free plan
* Paid plans (monthly / yearly)

### 10.2 Subscription Limits

| Feature        | Limit Example     |
| -------------- | ----------------- |
| Family members | 50 / unlimited    |
| Storage        | 500MB / unlimited |
| Export         | Paid only         |

### 10.3 Enforcement

* Limits checked on `save_post`
* Subscription data stored in custom table or post meta

---

## 11. Media & Storage

* Uses WordPress Media Library
* Media files linked to family via meta
* Optional external object storage (S3-compatible)

---

## 12. Security

* Nonce validation for all actions
* Capability checks for all CRUD operations
* Data isolation by family_id
* File upload restrictions

---

## 13. Performance Considerations

* Indexed meta queries (family_id)
* Object caching (Redis recommended)
* Avoid cross-family queries
* REST API for tree rendering

---

## 14. Extensibility (Future)

* PDF export of genealogy
* Audit log of changes
* AI-assisted duplicate detection
* Migration to headless frontend

---

## 15. Technology Stack

* WordPress (latest stable)
* PHP 8.x
* MySQL / MariaDB
* Custom Plugin (SaaS Core)
* Custom Theme (Portal UI)
* JavaScript (tree visualization)

---

## 16. Acceptance Criteria

* One WordPress instance supports multiple families
* Users cannot access data of other families
* Each family has a fully functional portal
* Genealogy tree renders correctly per family
* System is deployable on standard WordPress hosting

---

End of Specification
