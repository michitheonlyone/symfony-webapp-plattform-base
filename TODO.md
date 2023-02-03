# 1. Create User Scaffolding
- [x] ~~create user with entity~~
- [x] ~~create login form auth~~
- [x] ~~create auth layouts~~
- [x] ~~create login form twig page~~
- [x] ~~create register form twig page~~

# 2. Create RBAC/ACL Authorisation
- [ ] Create Voters and Role Hierarchy
- [ ] add mandates (community) to Database
- [ ] extend get Roles by mandate/community

Default (getRoles) method should return all roles from the default community set in the user (default_community) field

# 3. (i18n) Multi language Support
https://symfony.com/doc/current/translation.html
- [ ] add Language Support

# 4. Frontend Scaffolding (Twig, React, Vue) or API
### Choose which frontend scaffolding you would like to use and install it
- [ ] add Webpack Encore Scaffolding
- [ ] add TypeScript and Sass Support
1. EasyAdmin Symfony Bundle: https://symfony.com/bundles/EasyAdminBundle/current/index.html
2. AdminLTE Symfony Bundle: https://github.com/kevinpapst/AdminLTEBundle
3. Tabler Symfony Bundle: https://github.com/kevinpapst/TablerBundle
4. SB Admin 2: https://startbootstrap.com/theme/sb-admin-2
5. Gull Admin Package (own license): https://themeforest.net/item/gull-bootstrap-laravel-admin-dashboard-template/23101970
6. React Frontend: https://github.com/inkognitro/react-app-tutorial

# 5. Add API from Symfony
https://api-platform.com/