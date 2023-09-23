<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    // use HasFactory;
    public static function allArticle()
    {
        $articles = [
            [
                "id" => 5,
                "title" => "Human Rights and Its Types",
                "formatted_title" => "human-rights-and-its-types",
                "author" => "Freyza Fachrurrozi Kusuma",
                "date" => "2023-08-31 15:03:42",
                "image" => "article_2.jpg",
                "article" => "<p><strong>Human Rights and Its Types</strong> are fundamental rights and freedoms that belong to every person, simply because they are human beings. They are universal, inalienable, and indivisible, meaning they apply to all individuals regardless of their nationality, race, gender, religion, or any other characteristic. Human rights are protected by international law, and they serve as a foundation for justice, equality, and peace in society.</p><p>There are several types or categories of human rights, often classified into three main groups:</p><ol><li><strong>Civil and Political Rights:</strong> These rights focus on individual freedoms and protections in the context of government and political activities. They include:<ul style='list-style-type:disc'><li><strong>Right to Life:</strong> The right to life and protection from arbitrary execution.</li><li><strong>Freedom of Speech and Expression:</strong> The right to express opinions and ideas freely.</li><li><strong>Freedom of Religion:</strong> The right to practice any religion or belief.</li><li>Right to Privacy: Protection against unwarranted intrusion into personal life.</li><li>Right to Vote: The right to participate in the political process through elections.</li><li>Right to a Fair Trial: The right to a fair and impartial legal process.</li></ul></li><li><strong>Economic, Social, and Cultural Rights:</strong> These rights focus on the well-being and quality of life of individuals and communities. They include:<ul style='list-style-type:disc'><li>Right to Education: The right to access education and receive quality schooling.</li><li><strong>Right to Health:</strong> The right to healthcare and medical services.</li><li><strong>Right to Work:</strong> The right to fair and safe employment opportunities.</li><li><strong>Right to Adequate Housing:</strong> The right to live in decent housing.</li><li><strong>Right to Food:</strong> The right to access sufficient and nutritious food.</li><li><strong>Right to Cultural Participation:</strong> The right to engage in cultural, artistic, and scientific activities.</li></ul></li><li><strong>Collective Rights:</strong> These rights pertain to the rights of groups or communities and are often related to indigenous peoples, minorities, and other specific groups. They include:<ul style='list-style-type:disc'><li><strong>Right to Self-Determination:</strong> The right of people to determine their political status and pursue economic, social, and cultural development.</li><li><strong>Rights of Indigenous Peoples:</strong> Protection of the rights, cultures, and lands of indigenous communities.</li><li><strong>Rights of Minorities:</strong> Protection of the rights and cultural identities of minority groups.</li></ul></li></ol>"
            ],
            [
                "id" => 4,
                "title" => "Exploring International Law: Insights from Leading Experts",
                "formatted_title" => "exploring-international-law-insights-from-leading-experts",
                "author" => "Freyza Fachrurrozi Kusuma",
                "date" => "2023-08-30 10:14:25",
                "image" => "article_1.jpg",
                "article" => "<p><strong>International law</strong> is a dynamic and multifaceted field that shapes the way nations interact with one another on a globalstage. It serves as a critical framework for maintaining peace, resolving disputes, and upholding justice worldwide. Toprovide a deeper insight into this complex domain, we turn to the wisdom of experts who have dedicated their careers tothe study and practice of international law.</p><h3>The Essence of International Law</h3><p>In the words of <strong>Dr. Sarah Martinez</strong>, a distinguished professor of international law, this field can be defined as \"a body of rules and principles that regulate the relations between states and other international actors.\" It encompasses a vast array of legal instruments, including treaties, conventions,and customary practices, all of which guide the conduct of nations on the international stage.</p><h3>Unpacking the Sources of International Law</h3><p>According to <strong>Professor James Mitchell</strong>, a prominent authority in international law, several sources contribute to the formation of international law:</p><ol><li><strong>Treaties and Agreements:</strong> These formal accords between states are primary sources of international law, covering diverse topics from human rights to trade regulations.</li><li><strong>Customary International Law:</strong> This source is derived from consistent state practice and the belief that such practice is legally required (opinio juris), and it often plays a pivotal role in areas where formal treaties may be lacking.</li><li><strong>General Principles of Law:</strong> These principles, drawn from legal systems around the world, serve as secondary sources of international law.</li><li><strong>Judicial Decisions and Scholarly Writings:</strong> Rulings from international courts and the writings of legal scholars contribute to the development and interpretation of international law.</li></ol><h3>Core Principles of International Law</h3><p><strong>Dr. Elena Rodriguez</strong>, a leading expert in international human rights law, underscores several fundamental principles that underlie international law:</p><ul><li><strong>Sovereign Equality:</strong> In the realm of international law, all states, regardless of theirsize or power, enjoy equal standing.</li><li><strong>Non-Interference:</strong> States are generally barred from meddling in the internal affairs of other nations, respecting the principle of sovereignty.</li><li><strong>Peaceful Settlement of Disputes:</strong> International law encourages the peaceful resolution of conflicts through negotiation, mediation, and legal mechanisms.</li><li><strong>Respect for Human Rights:</strong> Human rights form a central focus of international law, with numerous treaties and conventions dedicated to their safeguarding.</li><li><strong>Prohibition of Aggression:</strong> The United Nations Charter strictly prohibits the use offorce, except in cases of self-defense or when authorized by the Security Council.</li></ul><h3>Addressing Evolving Challenges</h3><p><strong>Dr. Michael Chang</strong>, an expert in international environmental law, notes that international law continually evolves to address new challenges. \"Issues such as climate change, cyber warfare, and the rights of refugees are pushing the boundaries of traditional international law,\" he observes. \"Adapting to these challenges requires innovation and cooperation among states.\"</p><h3>The Vital Role of International Organizations</h3><p>International organizations, including the United Nations (UN), the International Court of Justice (ICJ), and the International Criminal Court (ICC), play a pivotal role in enforcing and upholding international law. These institutions serve as platforms for diplomacy, dispute resolution, and accountability, providing a forum where nations can come together to address global issues.</p><h3>Conclusion</h3><p>In conclusion, international law is a dynamic and indispensable framework that guides the conduct of nations in an increasingly interconnected world. It represents humanity's collective effort to establish rules and norms that promote peace, justice, and cooperation on a global scale. As the world grapples with new challenges and opportunities, the role of international law continues to evolve, shaped by the expertise and dedication of legal scholars and practitioners.</p>"
            ],
            [
                "id" => 3,
                "title" => "The Type of Law in Indonesia",
                "formatted_title" => "the-type-of-law-in-indonesia",
                "author" => "Freyza Fachrurrozi Kusuma",
                "date" => "2023-08-28 14:30:40",
                "image" => "article_3.jpg",
                "article" => "<p><strong>Indonesia</strong>, a vibrant archipelago known for its diverse culture and natural beauty, is also a country with a rich legal landscape. Understanding the types of law in Indonesia sheds light on the nation's legal system and its commitment to ensuring justice for its people.</p><h4>1. Constitutional Law</h4><p>At the heart of Indonesia's legal system lies its Constitution. Constitutional law defines the structure of the government, the rights of citizens, and the principles governing the nation. It's the bedrock upon which all other laws are built.</p><h4>2. Criminal Law</h4><p>Criminal law in Indonesia deals with offenses against the state or individuals. From theft to more serious crimes, these laws set out the rules for investigations, prosecutions, and penalties for wrongdoers.</p><h4>3. Civil Law</h4><p>Civil law governs disputes between individuals or entities, such as contract breaches, property disputes, and family matters. It aims to provide a fair resolution while protecting the rights and interests of all parties involved.</p><h4>4. Administrative Law</h4><p>Administrative law regulates the actions of government agencies and public officials. It ensures accountability, transparency, and fairness in the administration of public affairs.</p><h4>5. Islamic Law (Sharia Law)</h4><p>In certain regions of Indonesia, particularly Aceh, Islamic law plays a significant role. It covers matters related to personal conduct, family law, and religious affairs, aligning with the predominantly Muslim population's beliefs and customs.</p><h4>6. Environmental Law</h4><p>Given Indonesia's stunning natural beauty, environmental law is crucial. It addresses issues like deforestation, conservation, and pollution, aiming to protect the country's unique ecosystems.</p><h4>7. International Law</h4><p>Indonesia actively participates in international affairs. International law guides its interactions with other countries, covering areas such as trade, diplomacy, and human rights.</p><h4>8. Customary Law (Adat Law)</h4><p>Indonesia's diverse ethnic groups often have their own customary laws, which are respected and recognized within their communities. These laws can influence various aspects of life, from land ownership to marriage traditions.</p><p>Understanding these types of law in Indonesia provides a glimpse into the country's legal framework. As a nation that values justice and the rule of law, Indonesia continues to adapt and evolve its legal system to meet the changing needs of its society.</p>"
            ],
            [
                "id" => 2,
                "title" => "Can Debt and Receivables be Criminalized?",
                "formatted_title" => "can-debt-and-receivables-be-criminalized",
                "author" => "Freyza Fachrurrozi Kusuma",
                "date" => "2023-08-05 09:03:20",
                "image" => "article_4.jpg",
                "article" => "<p>Debt and receivables are common financial transactions in the business world, but can they lead to criminal charges? The answer largely depends on the circumstances and the legal framework of a particular jurisdiction.</p><h4>1. Civil Debt vs. Criminal Debt:</h4><p>In most cases, debts and receivables are civil matters rather than criminal ones. This means that disputes over unpaid debts are typically resolved through civil litigation, where the focus is on recovering the owed amount, plus interest or damages.</p><h4>2. Fraudulent Actions:</h4><p>However, debt-related situations can take a criminal turn if fraudulent actions are involved. For example, intentionally deceiving creditors, engaging in financial fraud, or using false information to obtain credit may lead to criminal charges, such as fraud or embezzlement.</p><h4>3. Bankruptcy and Insolvency:</h4><p>In cases of bankruptcy or insolvency, where individuals or businesses cannot meet their financial obligations, the legal system may intervene. While these situations are primarily handled through bankruptcy courts, fraudulent activities within bankruptcy proceedings can result in criminal charges.</p><h4>4. Illegal Debt Collection Practices:</h4><p>Another aspect to consider is debt collection. Using illegal or harassing tactics to collect a debt can lead to legal consequences under consumer protection laws, which may involve both civil and criminal penalties.</p><h4>5. Jurisdiction Matters:</h4><p>It's essential to recognize that the legal treatment of debt and receivables varies from one jurisdiction to another. Laws and regulations governing debt-related issues can significantly differ, affecting the potential for criminalization.</p><h4>6. Seek Legal Counsel:</h4><p>If you have concerns about debt-related matters, it's advisable to seek legal counsel to understand the specific laws and regulations in your jurisdiction. Legal experts can provide guidance on how to navigate debt-related disputes and avoid potential legal pitfalls.</p><p>In summary, while debts and receivables are primarily civil matters, they can become criminalized when fraudulent actions, illegal debt collection practices, or other unlawful activities are involved. Understanding the legal framework in your jurisdiction and seeking legal advice when necessary are essential steps in managing debt-related issues.</p>"
            ],
            [
                "id" => 1,
                "title" => "Law and Democracy: A Fundamental Relationship",
                "formatted_title" => "law-and-democracy-a-fundamental-relationship",
                "author" => "Freyza Fachrurrozi Kusuma",
                "date" => "2023-07-27 16:00:58",
                "image" => "article_5.jpg",
                "article" => "<p><strong>Law and democracy</strong> are intrinsically linked, forming the cornerstone of many modern societies. At its essence, this relationship signifies the rule of law as an integral component of a thriving democratic system.</p><h3>Upholding Rights and Freedoms</h3><ol><li><strong>Protecting Individual Rights:</strong> In a democratic society, the law serves as a shield, safeguarding the rights and freedoms of individuals. This includes freedom of speech, assembly, and the right to a fair trial. Laws are designed to ensure that every citizen's voice is heard and their liberties preserved.</li><li><strong>Equality Before the Law:</strong> Democracy thrives when all individuals, regardless of their background, are treated equally under the law. Laws ensure that no one is above the rules, fostering a sense of justice and fairness.</li></ol><h3>Resolving Disputes and Conflicts</h3><ol><li><strong>Legal Framework for Dispute Resolution:</strong> Disputes and conflicts are inevitable in any society. The law provides a structured framework for resolving these issues, allowing differences to be settled peacefully through courts, mediation, or negotiation.</li><li><strong>Accountability and Transparency:</strong> In a democracy, transparency and accountability are vital. The law holds public officials responsible for their actions, preventing abuse of power and corruption.</li></ol><h3>Balancing Freedom and Responsibility</h3><ol><li><strong>Balancing Individual and Collective Interests:</strong> Democracy thrives on the balance between individual freedoms and the collective welfare. Laws establish boundaries to ensure that personal rights do not infringe upon the rights of others or the common good.</li><li><strong>Legal Framework for Governance:</strong> Democratic governments are bound by laws and regulations, providing a clear structure for decision-making and governance. This ensures that policies are developed and implemented in accordance with established legal processes.</li></ol><p>In conclusion, the relationship between law and democracy is fundamental to the functioning of just and inclusive societies. Law upholds individual rights, resolves disputes, and maintains accountability, all while ensuring that democracy flourishes as a system of governance that values the voice and well-being of its citizens.</p><p>Democracy and the rule of law go hand in hand, creating a foundation where freedom, justice, and equality can thrive.</p>"
            ]
        ];

        return $articles;
    }

    public static function getArticle($id, $title)
    {
        $thisArray = [];
        $getArticle = self::allArticle();

        foreach ($getArticle as $article) {
            // $cleanTitle = Str::replace([':', '/', '|'], '', Str::lower($article['title']));
            // $putDashOnTitle = Str::replace(' ', '-', $cleanTitle);
            if ($article['id'] == $id && $article['formatted_title']  == $title) {
                $thisArray = $article;
            }
        }

        return $thisArray;
    }

    public static function recommendationArticle()
    {
        $getArticle = self::allArticle();

        return array_slice($getArticle, 0, 3);
    }

    public static function recommendationArticleDetail($id)
    {
        $thisArray = [];
        $getArticle = self::allArticle();

        foreach ($getArticle as $article) {
            if ($article['id'] != $id) {
                array_push($thisArray, [
                    'id' => $article['id'],
                    'title' => $article['title'],
                    'formatted_title' => $article['formatted_title'],
                    // $article['author'],
                    'date' => $article['date'],
                    'image' => $article['image'],
                    // $article['article']
                ]);
            }
        }

        return array_slice($thisArray, 0, 3);
    }
}
