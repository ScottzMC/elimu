-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 05, 2021 at 06:30 AM
-- Server version: 10.3.31-MariaDB-log-cll-lve
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scottjpq_elimu`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` longtext NOT NULL,
  `created_time` int(100) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `email`, `subject`, `message`, `created_time`, `created_date`) VALUES
(1, 'Scott Nnaghor', 'scottphenix24@gmail.com', 'Wrongly Blocked', 'No need', 1630582471, '2021-09-02 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `body` longtext NOT NULL,
  `category` varchar(100) NOT NULL,
  `lesson` varchar(200) NOT NULL,
  `sub_lesson_no` varchar(200) NOT NULL,
  `sub_lesson_title` varchar(100) NOT NULL,
  `video_url` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` longtext NOT NULL,
  `category` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`id`, `title`, `body`, `category`, `image`) VALUES
(4, 'Elimu-E-Learning', 'A short description of what the lesson is about.', 'Launchpad', 'banner1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mentoring`
--

CREATE TABLE `mentoring` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` longtext NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentoring`
--

INSERT INTO `mentoring` (`id`, `title`, `body`, `image`) VALUES
(1, 'Mentoring', '<h2><b>Why become a mentor?</b></h2><p>&nbsp;Help someone realise their potential&nbsp; - Activating the potential in someone by celebrating their talents empowers them to improve their own life, achieve their goals, and help others.&nbsp;</p><p>Give back to your community. The most impactful way to improve your community is to spend time investing in it. Mentoring youth in your community is a powerful way to invest in the next generation.&nbsp;</p><p>Learn more about yourself. Meaningful relationships are a two-way street. Learn more about your strengths, weaknesses, knowledge, experience, and beliefs by sharing them with someone else.&nbsp;</p><p>Change someone’s life. An intentional relationship has the power to alter a person’s life – particularly youth – for the better. You may be the only stable, positive impact in a youth’s life. The ripple effect is tremendous.&nbsp;</p><p>Become a better leader. Investing in the life of someone else challenges your perspective, sharpens your interpersonal skills, and exposes you to different decision-making approaches. Mentoring gives you the opportunity to learn by doing.</p><h2><b>Why get a mentor?</b></h2><p>Mentoring gives you access to the knowledge, guidance and confidence of others, in a supportive environment that is completely confidential, impartial and non-judgmental.</p><p>You will have guidance from your mentor for a set period of time, however the experience you take forward will stay with you :</p><p>• Improve your self-confidence, by learning new skills and experience</p><p>• Gain awareness of your skills</p><p>• Develop your network</p><p>• Benefit from an objective and safe source of support</p>', 'mentoring.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_time` int(100) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `policy`
--

CREATE TABLE `policy` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `policy`
--

INSERT INTO `policy` (`id`, `title`, `body`) VALUES
(1, 'Elimu’s Privacy Policy', '<p>This Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your information when You use the Service and tells You about Your privacy rights and how the law protects You.</p><p>We use Your Personal data to provide and improve the Service. By using the Service, You agree to the collection and use of information in accordance with this Privacy Policy.</p><h3><b>Interpretation and Definitions</b></h3><p>Interpretation</p><p>The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p><p><br></p><p>Definitions</p><p><br></p><p>For the purposes of these Terms and Conditions:</p><p><br></p><p>Account means a unique account created for You to access our Service or parts of our Service.</p><p><br></p><p>Organisation (referred to as either \"the Organisation\", \"We\", \"Us\" or \"Our\" in this Agreement) refers to Elimu International Ltd, Kemp House 152-160 City Road</p><p>London, EC1V 2NX. For the purpose of the GDPR, the Organisation is the Data Controller.</p><p><br></p><p>Cookies are small files that are placed on Your computer, mobile device or any other device by a website, containing the details of Your browsing history on that website among its many uses.</p><p><br></p><p>Country refers to: United Kingdom</p><p><br></p><p>Data Controller, for the purposes of the GDPR (General Data Protection Regulation), refers to the Organisation as the legal person which alone or jointly with others determines the purposes and means of the processing of Personal Data.</p><p><br></p><p>Device means any device that can access the Service such as a computer, a cellphone or a digital tablet.</p><p><br></p><p>Personal Data is any information that relates to an identified or identifiable individual. For the purposes for GDPR, Personal Data means any information relating to You such as a name, an identification number, location data, online identifier or to one or more factors specific to the physical, physiological, genetic, mental, economic, cultural or social identity.</p><p><br></p><p>Service refers to the Website.</p><p><br></p><p>Service Provider means any natural or legal person who processes the data on behalf of the Organisation. It refers to third-party companies or individuals employed by the Organisation to facilitate the Service, to provide the Service on behalf of the Organisation, to perform services related to the Service or to assist the Organisation in analysing how the Service is used. For the purpose of the GDPR, Service Providers are considered Data Processors.</p><p><br></p><p>Third-party Social Media Service refers to any website or any social network website through which a User can log in or create an account to use the Service.</p><p><br></p><p>Usage Data refers to data collected automatically, either generated by the use of the Service or from the Service infrastructure itself (for example, the duration of a page visit).</p><p><br></p><p>Website refers to Elimu, accessible from https://www.elimu.co.uk</p><p><br></p><p>You means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable. Under GDPR (General Data Protection Regulation), You can be referred to as the Data Subject or as the User as you are the individual using the Service.</p><p><br></p><p>Collecting and Using Your Personal Data</p><p><br></p><p>Types of Data Collected</p><p><br></p><p>Personal Data</p><p><br></p><p>While using Our Service, We may ask You to provide Us with certain personally identifiable information that can be used to contact or identify You. Personally identifiable information may include, but is not limited to:</p><p><br></p><p>Email address</p><p><br></p><p>First name and last name</p><p><br></p><p>Phone number</p><p><br></p><p>Address, State, Province, Postal code, City</p><p><br></p><p>Usage Data</p><p><br></p><p>Usage Data</p><p><br></p><p>Usage Data is collected automatically when using the Service.</p><p><br></p><p>Usage Data may include information such as Your Device\'s Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that You visit, the time and date of Your visit, the time spent on those pages, unique device identifiers and other diagnostic data.</p><p><br></p><p>When You access the Service by or through a mobile device, We may collect certain information automatically, including, but not limited to, the type of mobile device You use, Your mobile device unique ID, the IP address of Your mobile device, Your mobile operating system, the type of mobile Internet browser You use, unique device identifiers and other diagnostic data.</p><p><br></p><p>We may also collect information that Your browser sends whenever You visit our Service or when You access the Service by or through a mobile device.</p><p><br></p><p>Tracking Technologies and Cookies</p><p><br></p><p>We use Cookies and similar tracking technologies to track the activity on Our Service and store certain information. Tracking technologies used are beacons, tags, and scripts to collect and track information and to improve and analyse Our Service. The technologies We use may include:</p><p><br></p><p>Cookies or Browser Cookies. A cookie is a small file placed on Your Device. You can instruct Your browser to refuse all Cookies or to indicate when a Cookie is being sent. However, if You do not accept Cookies, You may not be able to use some parts of our Service. Unless you have adjusted Your browser setting so that it will refuse Cookies, our Service may use Cookies.</p><p><br></p><p>Flash Cookies. Certain features of our Service may use local stored objects (or Flash Cookies) to collect and store information about Your preferences or Your activity on our Service. Flash Cookies are not managed by the same browser settings as those used for Browser Cookies. For more information on how You can delete Flash Cookies, please read \"Where can I change the settings for disabling, or deleting local shared objects?\" available at https://helpx.adobe.com/flash-player/kb/disable-local-shared-objects-flash.html#main_Where_can_I_change_the_settings_for_disabling__or_deleting_local_shared_objects_</p><p><br></p><p>Web Beacons. Certain sections of our Service and our emails may contain small electronic files known as web beacons (also referred to as clear gifs, pixel tags, and single-pixel gifs) that permit the Company, for example, to count users who have visited those pages or opened an email and for other related website statistics (for example, recording the popularity of a certain section and verifying system and server integrity).</p><p><br></p><p>Cookies can be \"Persistent\" or \"Session\" Cookies. Persistent Cookies remain on Your personal computer or mobile device when You go offline, while Session Cookies are deleted as soon as You close Your web browser.&nbsp;</p><p><br></p><p>We use both Session and Persistent Cookies for the purposes set out below:</p><p><br></p><p>Necessary / Essential Cookies</p><p><br></p><p>Type: Session Cookies</p><p><br></p><p>Administered by: Us</p><p><br></p><p>Purpose: These Cookies are essential to provide You with services available through the Website and to enable You to use some of its features. They help to authenticate users and prevent fraudulent use of user accounts. Without these Cookies, the services that You have asked for cannot be provided, and We only use these Cookies to provide You with those services.</p><p><br></p><p>&nbsp;</p><p><br></p><p>Cookies Policy / Notice Acceptance Cookies</p><p><br></p><p>Type: Persistent Cookies</p><p><br></p><p>Administered by: Us</p><p><br></p><p>Purpose: These Cookies identify if users have accepted the use of cookies on the Website.</p><p><br></p><p>&nbsp;</p><p><br></p><p>Functionality Cookies</p><p><br></p><p>Type: Persistent Cookies</p><p><br></p><p>Administered by: Us</p><p><br></p><p>Purpose: These Cookies allow us to remember choices You make when You use the Website, such as remembering your login details or language preference. The purpose of these Cookies is to provide You with a more personal experience and to avoid You having to re-enter your preferences every time You use the Website.</p><p><br></p><p>&nbsp;</p><p><br></p><p>Tracking and Performance Cookies</p><p><br></p><p>Type: Persistent Cookies</p><p><br></p><p>Administered by: Third-Parties</p><p><br></p><p>Purpose: These Cookies are used to track information about traffic to the Website and how users use the Website. The information gathered via these Cookies may directly or indirectly identify you as an individual visitor. This is because the information collected is typically linked to a pseudonymous identifier associated with the device you use to access the Website. We may also use these Cookies to test new pages, features or new functionality of the Website to see how our users react to them.</p><p><br></p><p>Use of Your Personal Data</p><p><br></p><p>The Organisation may use Personal Data for the following purposes:</p><p><br></p><p>To provide and maintain our Service, including to monitor the usage of our Service.</p><p><br></p><p>To manage Your Account: to manage Your registration as a user of the Service. The Personal Data You provide can give You access to different functionalities of the Service that are available to You as a registered user.</p><p><br></p><p>For the performance of a contract: the development, compliance and undertaking of the purchase contract for the products, items or services You have purchased or of any other contract with Us through the Service.</p><p><br></p><p>To contact You: To contact You by email, telephone calls, SMS, or other equivalent forms of electronic communication, such as a mobile application\'s push notifications regarding updates or informative communications related to the functionalities, products or contracted services, including the security updates, when necessary or reasonable for their implementation.</p><p><br></p><p>To provide You with news, special offers and general information about other goods, services and events which we offer that are similar to those that you have already purchased or enquired about unless You have opted not to receive such information.</p><p><br></p><p>To manage Your requests: To attend and manage Your requests to Us.</p><p><br></p><p>For other purposes: We may use Your information for other purposes, such as data analysis, identifying usage trends, determining the effectiveness of our promotional campaigns and to evaluate and improve our Service, products, services, marketing and your experience.</p><p><br></p><p>We may share Your personal information in the following situations:</p><p><br></p><p>With Service Providers: We may share Your personal information with Service Providers to monitor and analyse the use of our Service, to contact You.</p><p><br></p><p>With Affiliates: We may share Your information with Our affiliates, in which case we will require those affiliates to honor this Privacy Policy.&nbsp;</p><p><br></p><p>With&nbsp; partners: We may share Your information with Our business partners to offer You certain products, services or promotions.</p><p><br></p><p>With other users: when You share personal information or otherwise interact in the public areas with other users, such information may be viewed by all users and may be publicly distributed outside. If You interact with other users or register through a Third-Party Social Media Service, Your contacts on the Third-Party Social Media Service may see Your name, profile, pictures and description of Your activity. Similarly, other users will be able to view descriptions of Your activity, communicate with You and view Your profile.</p><p><br></p><p>With Your consent: We may disclose Your personal information for any other purpose with Your consent.</p><p><br></p><p>Retention of Your Personal Data</p><p><br></p><p>The Organisation will retain Your Personal Data only for as long as is necessary for the purposes set out in this Privacy Policy. We will retain and use Your Personal Data to the extent necessary to comply with our legal obligations (for example, if we are required to retain your data to comply with applicable laws), resolve disputes, and enforce our legal agreements and policies.</p><p><br></p><p>The Company will also retain Usage Data for internal analysis purposes. Usage Data is generally retained for a shorter period of time, except when this data is used to strengthen the security or to improve the functionality of Our Service, or We are legally obligated to retain this data for longer time periods.</p><p><br></p><p>Transfer of Your Personal Data</p><p><br></p><p>Your information, including Personal Data, is processed at the Organisation\'s operating offices and in any other places where the parties involved in the processing are located. It means that this information may be transferred to — and maintained on — computers located outside of Your state, province, country or other governmental jurisdiction where the data protection laws may differ than those from Your jurisdiction.</p><p><br></p><p>Your consent to this Privacy Policy followed by Your submission of such information represents Your agreement to that transfer.</p><p><br></p><p>The Organisation will take all steps reasonably necessary to ensure that Your data is treated securely and in accordance with this Privacy Policy and no transfer of Your Personal Data will take place to an organisation or a country unless there are adequate controls in place including the security of Your data and other personal information.</p><p><br></p><p>Disclosure of Your Personal Data</p><p><br></p><p>Business Transactions</p><p><br></p><p>If the Organisation is involved in a merger, acquisition or asset sale, Your Personal Data may be transferred. We will provide notice before Your Personal Data is transferred and becomes subject to a different Privacy Policy.</p><p><br></p><p>Law enforcement</p><p><br></p><p>Under certain circumstances, the Organisation may be required to disclose Your Personal Data if required to do so by law or in response to valid requests by public authorities (e.g. a court or a government agency).</p><p><br></p><p>Other legal requirements</p><p><br></p><p>The Organisation may disclose Your Personal Data in the good faith belief that such action is necessary to:</p><p><br></p><p>Comply with a legal obligation</p><p><br></p><p>Protect and defend the rights or property of the Organisation</p><p><br></p><p>Prevent or investigate possible wrongdoing in connection with the Service</p><p><br></p><p>Protect the personal safety of Users of the Service or the public</p><p><br></p><p>Protect against legal liability</p><p><br></p><p>Security of Your Personal Data</p><p><br></p><p>The security of Your Personal Data is important to Us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While We strive to use commercially acceptable means to protect Your Personal Data, We cannot guarantee its absolute security.</p><p><br></p><p>Detailed Information on the Processing of Your Personal Data</p><p><br></p><p>The security of Your Personal Data is important to Us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While We strive to use commercially acceptable means to protect Your Personal Data, We cannot guarantee its absolute security.</p><p><br></p><p>Analytics</p><p><br></p><p>We may use third-party Service providers to monitor and analyze the use of our Service.</p><p><br></p><p>Google Analytics</p><p><br></p><p>Google Analytics is a web analytics service offered by Google that tracks and reports website traffic. Google uses the data collected to track and monitor the use of our Service. This data is shared with other Google services. Google may use the collected data to contextualize and personalize the ads of its own advertising network.</p><p><br></p><p>You can opt-out of having made your activity on the Service available to Google Analytics by installing the Google Analytics opt-out browser add-on. The add-on prevents the Google Analytics JavaScript (ga.js, analytics.js and dc.js) from sharing information with Google Analytics about visits activity.</p><p><br></p><p>For more information on the privacy practices of Google, please visit the Google Privacy &amp; Terms web page.</p><p><br></p><p>Email Marketing</p><p><br></p><p>We may use Your Personal Data to contact You with newsletters, marketing or promotional materials and other information that may be of interest to You. You may opt-out of receiving any, or all, of these communications from Us by following the unsubscribe link or instructions provided in any email We send or by contacting Us.</p><p><br></p><p>We may use Email Marketing Service Providers to manage and send emails to You.</p><p><br></p><p>Mailchimp</p><p><br></p><p>Mailchimp is an email marketing sending service provided by The Rocket Science Group LLC.</p><p><br></p><p>For more information on the privacy practices of Mailchimp, please visit their Privacy policy: https://mailchimp.com/legal/privacy/</p><p><br></p><p>TypeForm</p><p><br></p><p>TypeForm is a full-featured online form builder that makes it easy to create robust forms and collect important data.</p><p><br></p><p>For more information on the privacy practices of JotForm, please visit their Privacy policy.</p><p><br></p><p>Eventbrite</p><p><br></p><p>Eventbrite is a global self-service ticketing platform for live experiences that allows anyone to create, share, find and attend events.</p><p><br></p><p>For more information on the privacy practices of JotForm, please visit their Privacy policy:https://www.eventbrite.co.uk/support/articles/en_US/Troubleshooting/eventbrite-privacy-policy?lg=en_GB&nbsp;</p><p><br></p><p>GDPR Privacy</p><p><br></p><p>Legal Basis for Processing Personal Data under GDPR</p><p><br></p><p>We may process Personal Data under the following conditions:</p><p><br></p><p>Consent: You have given Your consent for processing Personal Data for one or more specific purposes.</p><p><br></p><p>Performance of a contract: Provision of Personal Data is necessary for the performance of an agreement with You and/or for any pre-contractual obligations thereof.</p><p><br></p><p>Legal obligations: Processing Personal Data is necessary for compliance with a legal obligation to which the Organisation is subject.</p><p><br></p><p>Vital interests: Processing Personal Data is necessary in order to protect Your vital interests or of another natural person.</p><p><br></p><p>Public interests: Processing Personal Data is related to a task that is carried out in the public interest or in the exercise of official authority vested in the organisation.</p><p><br></p><p>Legitimate interests: Processing Personal Data is necessary for the purposes of the legitimate interests pursued by the organisation.</p><p><br></p><p>In any case, the organisation will gladly help to clarify the specific legal basis that applies to the processing, and in particular whether the provision of Personal Data is a statutory or contractual requirement, or a requirement necessary to enter into a contract.</p><p><br></p><p>Your Rights under the GDPR</p><p>Elimu undertakes to respect the confidentiality of Your Personal Data and to guarantee You can exercise Your rights.</p><p><br></p><p>You have the right under this Privacy Policy, and by law if You are within the EU, to:</p><p><br></p><p>Request access to Your Personal Data. The right to access, update or delete the information We have on You. Whenever made possible, you can access, update or request deletion of Your Personal Data directly within Your account settings section. If you are unable to perform these actions yourself, please contact Us to assist You. This also enables You to receive a copy of the Personal Data We hold about You.</p><p><br></p><p>Request correction of the Personal Data that We hold about You. You have the right to to have any incomplete or inaccurate information We hold about You corrected.</p><p><br></p><p>Object to processing of Your Personal Data. This right exists where We are relying on a legitimate interest as the legal basis for Our processing and there is something about Your particular situation, which makes You want to object to our processing of Your Personal Data on this ground. You also have the right to object where We are processing Your Personal Data for direct marketing purposes.</p><p><br></p><p>Request erasure of Your Personal Data. You have the right to ask Us to delete or remove Personal Data when there is no good reason for Us to continue processing it.</p><p><br></p><p>Request the transfer of Your Personal Data. We will provide to You, or to a third-party You have chosen, Your Personal Data in a structured, commonly used, machine-readable format. Please note that this right only applies to automated information which You initially provided consent for Us to use or where We used the information to perform a contract with You.</p><p><br></p><p>Withdraw Your consent. You have the right to withdraw Your consent on using your Personal Data. If You withdraw Your consent, We may not be able to provide You with access to certain specific functionalities of the Service.</p><p><br></p><p>Exercising of Your GDPR Data Protection Rights</p><p><br></p><p>You may exercise Your rights of access, rectification, cancellation and opposition by contacting Us. Please note that we may ask You to verify Your identity before responding to such requests. If You make a request, We will try our best to respond to You as soon as possible.</p><p><br></p><p>You have the right to complain to a Data Protection Authority about Our collection and use of Your Personal Data. For more information, if You are in the European Economic Area (EEA), please contact Your local data protection authority in the EEA.</p><p><br></p><p>Children\'s Privacy</p><p><br></p><p>Our Service does not address anyone under the age of 13. We do not knowingly collect personally identifiable information from anyone under the age of 13. If You are a parent or guardian and You are aware that Your child has provided Us with Personal Data, please contact Us. If We become aware that We have collected Personal Data from anyone under the age of 13 without verification of parental consent, We take steps to remove that information from Our servers.</p><p><br></p><p>If We need to rely on consent as a legal basis for processing Your information and Your country requires consent from a parent, We may require Your parent\'s consent before We collect and use that information.</p><p><br></p><p>Links to Other Websites</p><p><br></p><p>Our Service may contain links to other websites that are not operated by Us. If You click on a third party link, You will be directed to that third party\'s site. We strongly advise You to review the Privacy Policy of every site You visit.</p><p><br></p><p>We have no control over and assume no responsibility for the content, privacy policies or practices of any third party sites or services.</p><p><br></p><p>Changes to this Privacy Policy</p><p><br></p><p>We may update Our Privacy Policy from time to time. We will notify You of any changes by posting the new Privacy Policy on this page.</p><p><br></p><p>We will let You know via email and/or a prominent notice on Our Service, prior to the change becoming effective and update the \"Last updated\" date at the top of this Privacy Policy.</p><p><br></p><p>You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</p><p><br></p><p>Contact Us</p><p><br></p><p>If you have any questions about this Privacy Policy, You can contact us:</p><p><br></p><p>• By email: hello@elimu.co.uk</p>');

-- --------------------------------------------------------

--
-- Table structure for table `role_model`
--

CREATE TABLE `role_model` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `body` longtext NOT NULL,
  `category` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role_model`
--

INSERT INTO `role_model` (`id`, `fullname`, `body`, `category`, `image`) VALUES
(1, 'Lynette Nabbosa', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularsed in the 1960 with release containing Lorem Ipsum passages desktop publishing software.\r\n\r\n', 'Role Model', 'lynettenabbosa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `body` longtext NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `color` varchar(20) NOT NULL,
  `size` varchar(100) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `title`, `body`, `image`, `price`, `color`, `size`, `created_date`) VALUES
(1, 'Elimu Varisty Sweatshirt', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\n', 'blog-01.jpg', 10, 'Black', 'L', '2021-08-27 17:04:39'),
(2, 'Elimu Varsity T-shirt', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\n', 'blog-01.jpg', 8, 'Black', 'L', '2021-08-27 17:04:39'),
(3, 'Elimu Sweatshirt', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\n', 'blog-01.jpg', 9, 'Black', 'M', '2021-08-27 17:04:39'),
(4, 'Elimu T-shirt', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\n', 'blog-01.jpg', 8, 'Black', 'XL', '2021-08-27 17:04:39');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `fullname`, `role`, `image`) VALUES
(1, 'Lynette Nabbosa\r\n', 'Founder', 'lynettenabbosa.jpg'),
(2, 'Annalisa Cleland-Awity\r\n', 'Co-Founder (Relationships Lead)', 'aca.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(30) NOT NULL,
  `status` varchar(50) NOT NULL,
  `donation` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `membership` varchar(100) NOT NULL,
  `occupation` varchar(200) NOT NULL,
  `career_interest` varchar(200) NOT NULL,
  `personal_interest` varchar(200) NOT NULL,
  `signing_up` longtext NOT NULL,
  `hoping_to_get` longtext NOT NULL,
  `bring_to_community` longtext NOT NULL,
  `social_url` text NOT NULL,
  `created_time` int(100) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `role`, `status`, `donation`, `image`, `membership`, `occupation`, `career_interest`, `personal_interest`, `signing_up`, `hoping_to_get`, `bring_to_community`, `social_url`, `created_time`, `created_date`) VALUES
(1, 'Scott Mike', 'scottphenix24@gmail.com', '$2a$08$Zuo59CNBGeh204s7LO2mxOUnVfeGwUPl3syaPp3zJiPW0eoc639zS', 'Admin', 'Activated', 0, 'phoenix-the-red-bird-4k-i4-1280x800.jpg', 'Role Model', 'IT', '', '', '', 'Mentor,Share your skills', '', '', 1628976315, '2021-08-14 21:25:15'),
(4, 'Carlene', 'admin@gmail.com', '$2a$08$SJ3IlxRvlm4LIMrUeeQk/u/.KxL9oVFKur3RbQuKAsaJyU2PHuAaa', 'User', 'Activated', 0, 'banner1.jpg', 'Role Model', '', 'IT', '', '', '', '', '', 1630579696, '2021-09-02 10:48:16');

-- --------------------------------------------------------

--
-- Table structure for table `visionary`
--

CREATE TABLE `visionary` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `body` longtext NOT NULL,
  `category` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visionary`
--

INSERT INTO `visionary` (`id`, `fullname`, `body`, `category`, `image`) VALUES
(1, 'Annalisa Cleland-Awity', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularsed in the 1960 with release containing Lorem Ipsum passages desktop publishing software.\r\n\r\n', 'Visionary', 'aca.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mentoring`
--
ALTER TABLE `mentoring`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `policy`
--
ALTER TABLE `policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_model`
--
ALTER TABLE `role_model`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visionary`
--
ALTER TABLE `visionary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mentoring`
--
ALTER TABLE `mentoring`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `policy`
--
ALTER TABLE `policy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role_model`
--
ALTER TABLE `role_model`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `visionary`
--
ALTER TABLE `visionary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
