<?php
$newsArray = [
    [
        'title' => 'The Latest Global Climate Summit Results',
        'description' => 'World leaders have come together to discuss solutions to the ongoing climate crisis, with new policies aimed at reducing carbon emissions.
        The recently concluded Global Climate Summit has brought renewed hope to environmental advocates worldwide. With over 150 nations participating, leaders pledged to cut greenhouse gas emissions significantly by 2030. A key focus was on transitioning to renewable energy sources, such as solar and wind power, and reducing dependence on fossil fuels. Countries have committed to setting stricter regulations on industrial emissions and investing in sustainable urban infrastructure. Grassroots organizations played a major role in shaping the agenda, ensuring that the voices of indigenous communities and vulnerable populations were heard. The summit ended with an optimistic declaration: a promise to prioritize the health of our planet for future generations.',
        'image' => 'climate-summit.jpg',
        'author' => 'Emily Wilson',
        'publication_date' => '2024-11-25',
        'id' => 1,
        'category' => 'Environment'
    ],
    [
        'title' => 'New Dietary Guidelines for Healthy Living',
        'description' => 'Nutrition experts have released new guidelines to promote healthier eating habits, focusing on plant-based diets and reduced sugar intake.
        Health experts unveiled a transformative set of dietary recommendations aimed at combating rising rates of chronic diseases. These guidelines emphasize the benefits of a predominantly plant-based diet, rich in fruits, vegetables, whole grains, and lean proteins. Reducing sugar intake, particularly from processed foods and sugary drinks, was highlighted as a critical step towards better health. The guidelines also encouraged mindful eating practices, such as portion control and avoiding late-night snacks. Nutritionists hope these changes will not only improve individual health but also contribute to a more sustainable food system by reducing the environmental impact of animal agriculture.',
        'image' => 'healthy-eating.jpg',
        'author' => 'Mark Adams',
        'publication_date' => '2024-11-24',
        'id' => 2,
        'category' => 'Health'
    ],
    [
        'title' => 'Top 10 Vacation Destinations for 2025',
        'description' => 'From hidden gems to popular tourist spots, discover the best places to visit in 2025 for your next holiday.
        As travel rebounds globally, 2025 is shaping up to be a year filled with wanderlust and adventure. Topping the list is the serene beauty of Kyoto, Japan, where ancient temples and cherry blossoms provide a picturesque escape. Iceland’s dramatic landscapes, complete with glaciers, volcanoes, and the Northern Lights, remain a must-visit. For beach lovers, the Maldives continues to enchant with its turquoise waters and luxury resorts. Closer to home, Portugal’s vibrant cities of Lisbon and Porto are gaining traction as cultural hubs. Other noteworthy mentions include South Africa’s safari experiences, the architectural wonders of Egypt, and the culinary delights of Mexico. No matter your preference, there’s a perfect destination awaiting you.',
        'image' => 'vacation-destinations.jpg',
        'author' => 'Rachel Lee',
        'publication_date' => '2024-11-23',
        'id' => 3,
        'category' => 'Travel'
    ],
    [
        'title' => 'The Future of Sustainable Fashion',
        'description' => 'Sustainable fashion brands are gaining popularity as consumers demand eco-friendly and ethically produced clothing.
        In an era where environmental consciousness is at the forefront, the fashion industry is undergoing a major transformation. Sustainable brands are embracing practices such as using organic fabrics, recycling materials, and reducing water usage in production. Additionally, many companies are adopting transparent supply chains to ensure ethical treatment of workers. The "slow fashion" movement encourages consumers to buy fewer, high-quality items that last longer, challenging the throwaway culture of fast fashion. Designers are also experimenting with innovative materials like mushroom leather and plant-based textiles. As consumers demand change, the industry is evolving towards a greener and more responsible future.',
        'image' => 'sustainable-fashion.jpg',
        'author' => 'Laura Green',
        'publication_date' => '2024-11-22',
        'id' => 4,
        'category' => 'Fashion'
    ],
    [
        'title' => 'The Rise of Online Gaming Communities',
        'description' => 'E-sports are becoming a major form of entertainment, with millions of people watching competitive gaming events globally.
        Online gaming has grown from a niche hobby to a global phenomenon. E-sports tournaments now rival traditional sports in viewership, with millions tuning in to watch games like League of Legends, Dota 2, and Counter-Strike. Beyond competition, gaming platforms have become social hubs where players connect, form teams, and build communities. Streaming services like Twitch and YouTube Gaming have given rise to professional gamers and influencers who earn their living through sponsorships and fan support. This cultural shift has also brought challenges, such as addressing toxic behavior and ensuring inclusivity, but the future of online gaming looks brighter than ever.',
        'image' => 'esports.jpg',
        'author' => 'James Brown',
        'publication_date' => '2024-11-21',
        'id' => 5,
        'category' => 'Entertainment'
    ],
    [
        'title' => 'New Innovations in Agriculture',
        'description' => 'Vertical farming techniques are revolutionizing food production by using less space and water while producing high-quality crops.
As urbanization increases, innovative farming techniques are reshaping how we grow food. Vertical farming, where crops are grown in stacked layers, has emerged as a groundbreaking solution to land scarcity. Utilizing controlled environments, these farms can produce fresh vegetables year-round with minimal water and no pesticides. LED technology provides optimal lighting conditions, while automated systems handle planting, watering, and harvesting. Companies like AeroFarms and Plenty are leading the charge, supplying urban areas with fresh produce grown just miles away from consumers. Advocates believe this method can address global food security challenges while reducing agriculture’s environmental footprint.',
        'image' => 'vertical-farming.jpg',
        'author' => 'Susan White',
        'publication_date' => '2024-11-20',
        'id' => 6,
        'category' => 'Agriculture'
    ],
    [
        'title' => 'How the Global Economy is Recovering Post-Pandemic',
        'description' => 'Economic experts are analyzing how countries are recovering from the global pandemic, with an emphasis on job growth and new financial policies.
The global economy is showing signs of recovery after the turbulence of the pandemic. Governments worldwide have implemented stimulus packages to boost industries and support small businesses. Key sectors such as technology, healthcare, and renewable energy are thriving, offering new job opportunities. At the same time, there are challenges, including inflation and supply chain disruptions, which require careful management. Economists predict that emerging markets will play a significant role in driving global growth, as they embrace digital transformation and attract foreign investments. Overall, resilience and innovation are shaping the recovery trajectory in an interconnected world.',
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

<?php
function shortenTheText($text, $limit) {

    $words = explode(' ', $text);

    return count($words) > $limit
     ? implode(' ',array_slice($words, 0, $limit)) . '...'
     : $text;
}
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
