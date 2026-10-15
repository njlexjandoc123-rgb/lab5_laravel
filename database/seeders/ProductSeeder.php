<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $subjects = [
            [
                'sku'           => 'WEB101',
                'name'          => 'Web Systems and Technologies',
                'category'      => 'Information Technology',
                'quantity'      => 3, // Units
                'reorder_level' => 1,
                'unit_price'    => 2250.00, // Tuition Fee
                'supplier'      => 'Prof. Santos', // Instructor
                'description'   => 'Fundamentals of HTML, CSS, JavaScript, and Server-Side Development'
            ],
            [
                'sku'           => 'IT201',
                'name'          => 'Data Structures and Algorithms',
                'category'      => 'Information Technology',
                'quantity'      => 3,
                'reorder_level' => 1,
                'unit_price'    => 2250.00,
                'supplier'      => 'Prof. Reyes',
                'description'   => 'Arrays, Linked Lists, Trees, Sorting, and Searching Algorithms'
            ],
            [
                'sku'           => 'IT202',
                'name'          => 'Database Management Systems',
                'category'      => 'Information Technology',
                'quantity'      => 3,
                'reorder_level' => 1,
                'unit_price'    => 2250.00,
                'supplier'      => 'Prof. Garcia',
                'description'   => 'Relational Databases, SQL Queries, Normalization, and ERD Design'
            ],
            [
                'sku'           => 'MATH201',
                'name'          => 'Discrete Mathematics',
                'category'      => 'Mathematics',
                'quantity'      => 3,
                'reorder_level' => 1,
                'unit_price'    => 1800.00,
                'supplier'      => 'Prof. Cruz',
                'description'   => 'Logic, Sets, Relations, Functions, and Graph Theory'
            ],
            [
                'sku'           => 'IT203',
                'name'          => 'Networking Fundamentals',
                'category'      => 'Information Technology',
                'quantity'      => 3,
                'reorder_level' => 1,
                'unit_price'    => 2500.00,
                'supplier'      => 'Prof. Mendoza',
                'description'   => 'OSI Model, TCP/IP, IP Addressing, Routers, and Switches'
            ],
            [
                'sku'           => 'GE105',
                'name'          => 'Ethics',
                'category'      => 'General Education',
                'quantity'      => 3,
                'reorder_level' => 1,
                'unit_price'    => 1500.00,
                'supplier'      => 'Prof. Bautista',
                'description'   => 'Moral Principles and Ethical Reasoning in Modern Society'
            ],
            [
                'sku'           => 'CC101',
                'name'          => 'Introduction to Computing',
                'category'      => 'Computer Science',
                'quantity'      => 3,
                'reorder_level' => 1,
                'unit_price'    => 2000.00,
                'supplier'      => 'Prof. De Leon',
                'description'   => 'Overview of Computer Architecture, Software, and Computing Concepts'
            ],
            [
                'sku'           => 'IT301',
                'name'          => 'Object-Oriented Programming',
                'category'      => 'Information Technology',
                'quantity'      => 3,
                'reorder_level' => 1,
                'unit_price'    => 2400.00,
                'supplier'      => 'Prof. Ramos',
                'description'   => 'Classes, Objects, Inheritance, Polymorphism, and Encapsulation'
            ],
            [
                'sku'           => 'IT302',
                'name'          => 'Information Assurance and Security',
                'category'      => 'Information Technology',
                'quantity'      => 3,
                'reorder_level' => 1,
                'unit_price'    => 2500.00,
                'supplier'      => 'Prof. Aquilino',
                'description'   => 'Cybersecurity Fundamentals, Cryptography, and Threat Mitigation'
            ],
            [
                'sku'           => 'GE101',
                'name'          => 'Understanding the Self',
                'category'      => 'General Education',
                'quantity'      => 3,
                'reorder_level' => 1,
                'unit_price'    => 1500.00,
                'supplier'      => 'Prof. Villanueva',
                'description'   => 'Personal Identity, Psychological, and Sociological Perspectives'
            ]
        ];

        foreach ($subjects as $subject) {
            Product::create($subject);
        }
    }
}