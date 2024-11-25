<?php
$newsArray = [
    [
        'title' => 'The Latest Global Climate Summit Results',
        'description' => 'World leaders have come together to discuss solutions to the ongoing climate crisis, with new policies aimed at reducing carbon emissions.',
        'image' => 'climate-summit.jpg',
        'author' => 'Emily Wilson',
        'publication_date' => '2024-11-25',
        'id' => 1,
        'category' => 'Environment'
    ],
    [
        'title' => 'New Dietary Guidelines for Healthy Living',
        'description' => 'Nutrition experts have released new guidelines to promote healthier eating habits, focusing on plant-based diets and reduced sugar intake.',
        'image' => 'healthy-eating.jpg',
        'author' => 'Mark Adams',
        'publication_date' => '2024-11-24',
        'id' => 2,
        'category' => 'Health'
    ],
    [
        'title' => 'Top 10 Vacation Destinations for 2025',
        'description' => 'From hidden gems to popular tourist spots, discover the best places to visit in 2025 for your next holiday.',
        'image' => 'vacation-destinations.jpg',
        'author' => 'Rachel Lee',
        'publication_date' => '2024-11-23',
        'id' => 3,
        'category' => 'Travel'
    ],
    [
        'title' => 'The Future of Sustainable Fashion',
        'description' => 'Sustainable fashion brands are gaining popularity as consumers demand eco-friendly and ethically produced clothing.',
        'image' => 'sustainable-fashion.jpg',
        'author' => 'Laura Green',
        'publication_date' => '2024-11-22',
        'id' => 4,
        'category' => 'Fashion'
    ],
    [
        'title' => 'The Rise of Online Gaming Communities',
        'description' => 'E-sports are becoming a major form of entertainment, with millions of people watching competitive gaming events globally.',
        'image' => 'esports.jpg',
        'author' => 'James Brown',
        'publication_date' => '2024-11-21',
        'id' => 5,
        'category' => 'Entertainment'
    ],
    [
        'title' => 'New Innovations in Agriculture',
        'description' => 'Vertical farming techniques are revolutionizing food production by using less space and water while producing high-quality crops.',
        'image' => 'vertical-farming.jpg',
        'author' => 'Susan White',
        'publication_date' => '2024-11-20',
        'id' => 6,
        'category' => 'Agriculture'
    ],
    [
        'title' => 'How the Global Economy is Recovering Post-Pandemic',
        'description' => 'Economic experts are analyzing how countries are recovering from the global pandemic, with an emphasis on job growth and new financial policies.',
        'image' => 'global-economy.jpg',
        'author' => 'David Harris',
        'publication_date' => '2024-11-19',
        'id' => 7,
        'category' => 'Economy'
    ]
];

$categories = array_column($newsArray, 'category');

$categories  = array_unique($categories);

?>
<header>
    <a href="index.php">
        <img src="../images/logo.png" alt="Logo" class="logo">
    </a>
    <nav>
        <ul>
            <li><a href="/index.php">Home</a></li>
            <li><a href="/pages/news-list.php">News</a></li>
            <li><a href="/pages/about.php">About</a></li>
            <li><a href="/pages/contact.php">Contact</a></li>
        </ul>
    </nav>
</header>
