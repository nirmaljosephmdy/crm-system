# PART One CRM System - Programming Test

## Introduction

This project is a simple CRM system built using Laravel 12.

The main goal is to create a flexible contact creation service where contacts can be created from different sources such as:

- Account
- Lead
- Future sources (extensible design)


---

## Requirements

- PHP 8.3+
- Composer
- MySQL
- Laravel 12

---

## Installation

Clone repository:

# ***************************************************************************************************************************

# PART TWO- Query optimization

# Lead Query Optimization Test

## Objective

Optimize the given query while maintaining:

- Same data output
- Same ordering
- Improved performance

---

## Database Optimization

### Indexing Strategy

Added composite index:

(account_id, deleted_at)

Reason:

- Query filters using account_id and deleted_at
- Prevents full table scan.

Added index:

(account_id, id)

Reason:

- Supports ORDER BY id DESC
- Avoid filesort operation.

---

## Query Optimization

- Table alias used.
- Only required columns selected.
- Index-supported filtering.

---

## Performance Improvement

Before optimization:

- Full table scan.
- Filesort for ordering.

After optimization:

- Index range scan.
- Reduced execution time significantly.

Expected improvement:

70% depending on dataset size.

---

## Assumptions

- deleted_at represents soft deletes.
- Output format must remain unchanged.
- DATE_FORMAT kept due to output requirements.

---

## How to Run

1. Execute optimized query from optimized_table.sql File.
