# Company X Asset, Employee, and Maintenance Management

## Goals and Features

- **Follow Good Laravel Coding Convention:** Utilize Laravel's factory system and conventions to ensure readability and consistency throughout the codebase. Implement factories and seeders for all dummy data required to showcase the application.

- **Complete Authentication System:** Users are categorized into regular users and admins. Regular users have access to limited resources such as the maintenance request form, while admins have complete access to all features. Breeze is used for authentication with middleware attached to routes for access control.

- **Utilize Local Query Scopes:** Implement local query scopes to retrieve any number of results for the end user. This provides flexibility in data retrieval based on specific criteria.

- **Implement Pagination:** Paginate results to display only a limited number of records per page, typically 10, to enhance user experience and optimize performance.

- **Maintenance Portal:** Users can submit maintenance requests through a dedicated portal. Maintenance requests can only be viewed and resolved by admin users, ensuring proper management and resolution of issues.

- **Reports Section:** Display reports indicating devices that need to be cycled out for new ones. Devices nearing the end of their lifecycle, typically within 3 months of the defined cycle rate (e.g., 3 years), are listed for replacement. This facilitates proactive planning and contract signing with recycling facilities to maximize ROI for end-of-life devices.

- **Componentization:** Practice creating and implementing reusable components such as the navbar, navbarlinks, and other elements for improved reusability and maintainability of code.

- **Asset Management:** Provide a comprehensive list of all assets within the company, including those assigned and unassigned to employees. Admin users can delete or edit asset information, and the database is searchable by serial code for easy lookup.

- **Employee Management:** Offer a detailed view of employees, including information about the assets assigned to them. When an employee leaves the company, their assigned devices are reallocated into the pool of available devices for efficient asset management.

- **Enhanced Notification System:** Implement a better notification system with popup notifications for successful procedures. Utilize Alpine.js for smooth transition effects, enhancing user interaction and feedback.

![welcome](https://github.com/uralrdybread/AssetManagementV2/assets/48900828/a7a58bd0-f230-4fb2-b000-986281bbb04f)
![reports](https://github.com/uralrdybread/AssetManagementV2/assets/48900828/e6325b38-6ea2-4b94-a070-d195a5999aa8)
![nologin](https://github.com/uralrdybread/AssetManagementV2/assets/48900828/a6dfaafd-9c01-4488-9f46-d27b9cbc4ee5)
![maintenanceAdmin](https://github.com/uralrdybread/AssetManagementV2/assets/48900828/45d20131-f2aa-4960-94a2-a118d4bf5ec2)
![employeeshow](https://github.com/uralrdybread/AssetManagementV2/assets/48900828/9c60d98f-d9d8-44a6-a947-56777d6ae26c)
![employees](https://github.com/uralrdybread/AssetManagementV2/assets/48900828/bd04f80b-defe-4f21-aa36-04f0e93e511e)
![editAsset](https://github.com/uralrdybread/AssetManagementV2/assets/48900828/1170c605-469e-48ba-b7ed-764e6df405e6)
![createasset](https://github.com/uralrdybread/AssetManagementV2/assets/48900828/13c6a5f5-199f-4d96-97a6-30c8cf8d717e)
![assetssearch](https://github.com/uralrdybread/AssetManagementV2/assets/48900828/4a5a201b-78ae-4d01-888a-b82fade1c372)
![assets](https://github.com/uralrdybread/AssetManagementV2/assets/48900828/6836a3f3-6613-47a1-bf83-a91cf75c5d0e)


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
