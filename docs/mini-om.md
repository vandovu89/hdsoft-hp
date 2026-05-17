Dưới đây là System Specification + Implementation Plan đầy đủ, có cấu trúc, có thể dùng làm input cho AI coding (Cursor, Copilot, Devin, v.v.).
Mình viết theo kiểu technical design doc / PRD + SRS hybrid, đủ chi tiết để bắt đầu build ngay.

📘 SYSTEM SPECIFICATION
SaaS Order Management for Mini Online Shops
1. System Overview
1.1 Product Name

SimpleOrder SaaS (Working name)

1.2 Purpose

Xây dựng nền tảng SaaS giúp shop online nhỏ:

Ghi nhận đơn hàng

Theo dõi trạng thái giao hàng

Quản lý khách hàng

Xem thống kê bán hàng

Quản lý subscription SaaS

1.3 Target Users
Primary

Shop bán hàng Facebook

Shop bán hàng Zalo

Shop livestream

Secondary

Shop Instagram / TikTok

Shop bán hàng offline nhỏ

1.4 Core Value Proposition

UI đơn giản

Chi phí thấp

Tối ưu workflow shop nhỏ

Không yêu cầu kiến thức ERP

2. System Architecture
2.1 High Level Architecture
Client (Next.js)
    |
REST API
    |
Backend (NestJS)
    |
PostgreSQL (Prisma ORM)
    |
External Services
- Payment Gateway
- Email Service
- File Storage

2.2 Architecture Style

Monolithic Modular Architecture

Multi-Tenant (Shop-based isolation)

2.3 Deployment Architecture
Vercel -> Frontend
Railway -> Backend API
Neon / Supabase -> Database
S3 / Supabase -> Storage

3. Functional Requirements
3.1 Authentication Module
Features

Register account

Login

Logout

Refresh token

Password reset

Email verification (Phase 2)

Business Rules

Mỗi user thuộc 1 shop

User role:

OWNER

STAFF

3.2 Shop Management
Features

Tạo shop khi register

Update shop profile

Manage staff accounts

3.3 Order Management
Create Order

Fields:

Field	Type
customer_name	string
phone	string
address	string
note	string
status	enum
total_price	number
Order Status
NEW
PROCESSING
SHIPPING
COMPLETED
CANCELLED

Order Item

product_name

quantity

unit_price

3.4 Dashboard & Reporting
Metrics

Tổng doanh thu theo ngày

Số đơn theo trạng thái

Top sản phẩm

3.5 Subscription Management
Plans
Plan	Order Limit
FREE	30/month
PRO	1000/month
BUSINESS	Unlimited
Logic

Kiểm tra order limit trước khi create order

Subscription expiry check

3.6 Staff Management

Owner tạo staff

Staff chỉ xem dữ liệu shop

4. Non-Functional Requirements
Performance

Response < 500ms

Pagination bắt buộc

Security

JWT Authentication

Password hash (bcrypt)

RBAC authorization

Scalability

Multi-tenant via shop_id

Stateless API

5. Data Model (ERD)
5.1 Tables
users
id (UUID)
email
password_hash
shop_id
role
created_at
updated_at
deleted_at

shops
id
name
owner_id
plan
created_at

orders
id
shop_id
customer_name
phone
address
note
status
total_price
created_at
updated_at
deleted_at

order_items
id
order_id
product_name
quantity
unit_price

subscriptions
id
shop_id
plan
start_date
expire_date
status

audit_logs
id
shop_id
user_id
action
entity
entity_id
created_at

6. API Specification
Auth
POST /auth/register
POST /auth/login
POST /auth/refresh
POST /auth/logout
Orders
GET /orders

Query:

page

status

date_range

POST /orders
GET /orders/:id
PATCH /orders/:id
DELETE /orders/:id

(Soft delete)

Subscription
GET /subscription
POST /subscription/upgrade
7. Authorization Rules
Owner

Full access

Staff

CRUD orders only

Cannot manage subscription

8. Multi-Tenant Strategy
Tenant Isolation

All business tables MUST contain:

shop_id

Middleware Requirement

Extract shop_id from JWT

Inject into query filter

9. Validation Rules
Order

customer_name required

total_price > 0

item quantity > 0

10. Logging & Auditing

Track:

Order created

Order status change

Subscription upgrade

IMPLEMENTATION PLAN
Phase 0 — Project Setup (2 days)
Tasks
Setup Monorepo

pnpm workspace / Turborepo

apps/
  web
  api
packages/
  shared-types

Setup CI/CD

GitHub Actions basic build check

Phase 1 — Core Infrastructure (Week 1)
Backend
Setup NestJS

Modules:

AuthModule

UsersModule

ShopsModule

Setup Prisma

PostgreSQL connection

Migration pipeline

Implement Auth

Register

Login

JWT

Refresh token

Frontend
Setup Next.js

Tailwind

shadcn UI

Pages

Login

Register

Phase 2 — Order System (Week 2)
Backend

Order module

Order items relation

CRUD APIs

Pagination

Frontend

Order list screen

Create order form

Update status

Phase 3 — Dashboard (Week 3)
Backend

Aggregation queries

Metrics endpoints

Frontend

Sales chart

Order stats

Phase 4 — Subscription System (Week 4)
Backend

Subscription entity

Plan limit middleware

Expiry logic

Frontend

Pricing page

Billing dashboard

Phase 5 — QA & Launch (Week 5)
Tasks

Load testing

Error logging

Deploy production

Create landing page

11. Coding Standards
Backend

Service Layer mandatory

DTO validation required

Frontend

Server Components default

React Query for data fetching

12. Testing Strategy
Unit Tests

Service layer

Integration Tests

Auth flow

Order CRUD

13. Future Expansion

Shipping integration

Payment automation

Mobile app

AI order parsing

14. Acceptance Criteria (MVP)

System is considered MVP complete if:

User can register

User can create shop

User can create order

User can view dashboard

Subscription limits enforced

⭐ DEVELOPMENT BACKLOG (Top 20 Tasks)

Setup repo

Setup Prisma

Create user entity

Create shop entity

Implement register

Implement login

Implement JWT guard

Create order entity

Create order CRUD

Create order UI

Pagination

Dashboard metrics

Subscription entity

Limit middleware

Billing UI

Role-based access

Audit log

Landing page

Deployment pipeline

Production config

⭐ Suggested Prompt to Use With AI Coding Tool

Bạn có thể copy đoạn này vào AI khác:

Generate a full-stack SaaS order management system using:

Frontend:
Next.js 14
Tailwind
React Query
Zod

Backend:
NestJS
Prisma ORM
PostgreSQL
JWT Authentication

Architecture:
Multi-tenant via shop_id
Service layer pattern
DTO validation

Features:
Auth
Order CRUD
Subscription plan limit
Dashboard metrics