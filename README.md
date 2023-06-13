This app provides basic Auth (RBAC/ACL) and Login/Register Scaffolding with Bootstrap and AdminLTE Layouts for your symfony 6+ App.

# Branches are here for starting points:
- dev-000: in development (unstable)
- master: newest (stable).
- user-scaffolding:
  - contains User and Login form Auth system.
  - without communities (mandates)
- community: added community
  - Added support for multiple communities/ mandates (multiloc).
  - RBAC/ACL Support for multiple communities (getRolesByCommunityId)
- admin-lte: added AdminLTE Layouts
- ...

php bin/console doctrine:migrations:migrate
php bin/console security:hash-password

UUID for unsortable not relational data records
ULID fr sortable relational data record


https://docs.github.com/de/repositories/creating-and-managing-repositories/creating-a-repository-from-a-template