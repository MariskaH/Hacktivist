# Hacktivist

Hacktivist is a blogging platform where users can create, read, update, and delete their own blog posts.

## Features

- User Authentication: Register and sign in to create, edit, or delete your own blog posts.
- Blog Post Management: Write, update, and delete your own blog posts.
- Access Control: Ensures that only the owner of a blog post can edit or delete it.

## Access Control Feature

The access control feature is implemented using the Principle of Least Privilege. This means that a user is only allowed to perform actions for which they have been given explicit permissions.

In the context of this application, the access control feature ensures that only the owner of a blog post can view, edit, update, or delete it.

To find this feature in the codebase:

1. Navigate to the `PostController` file in the `app/Http/Controllers` directory.
2. In the `show`, `edit`, `update`, and `destroy` methods, you will find a check that verifies if the current user (`auth()->id()`) is the owner of the post (`$post->user_id`). If not, the application aborts the operation and returns a 403 error.

This implementation ensures that users can only modify their own blog posts, adhering to the Principle of Least Privilege.


## Getting Started

1. Clone the repository
2. Install dependencies with `composer install`
3. Run the application with `php artisan serve`

Feel free to explore the application and experiment with the access control features!

