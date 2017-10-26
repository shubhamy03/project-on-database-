-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2017 at 06:07 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vec2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `admin_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_password`, `admin_name`) VALUES
('spm', 'surya', 'SURYA PRAKASH MOURYA'),
('sk', 'sumit', 'SUMIT KUMAR'),
('sy', 'shubham', 'SHUBHAM YADAV');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `exam_name` varchar(15) NOT NULL,
  `time_duration` varchar(15) NOT NULL,
  `number_of_question` int(100) NOT NULL,
  `number_of_set` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_name`, `time_duration`, `number_of_question`, `number_of_set`) VALUES
('GATE CS', '10 min', 9, 3),
('GATE EC', '10 min', 10, 3),
('GATE ME', '10 min', 10, 3),
('JEE ', '10 min', 10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `exam_has`
--

CREATE TABLE `exam_has` (
  `exam_name` varchar(15) NOT NULL,
  `question_id` varchar(15) NOT NULL,
  `set_number` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_has`
--

INSERT INTO `exam_has` (`exam_name`, `question_id`, `set_number`) VALUES
('GATE CS', 'CS_Q1', 1),
('GATE CS', 'CS_Q10', 2),
('GATE CS', 'CS_Q11', 2),
('GATE CS', 'CS_Q12', 2),
('GATE CS', 'CS_Q13', 2),
('GATE CS', 'CS_Q15', 2),
('GATE CS', 'CS_Q16', 2),
('GATE CS', 'CS_Q19', 2),
('GATE CS', 'CS_Q2', 1),
('GATE CS', 'CS_Q20', 2),
('GATE CS', 'CS_Q21', 2),
('GATE CS', 'CS_Q22', 3),
('GATE CS', 'CS_Q23', 3),
('GATE CS', 'CS_Q24', 3),
('GATE CS', 'CS_Q25', 3),
('GATE CS', 'CS_Q26', 3),
('GATE CS', 'CS_Q27', 3),
('GATE CS', 'CS_Q28', 3),
('GATE CS', 'CS_Q29', 3),
('GATE CS', 'CS_Q3', 1),
('GATE CS', 'CS_Q30', 3),
('GATE CS', 'CS_Q4', 1),
('GATE CS', 'CS_Q5', 1),
('GATE CS', 'CS_Q6', 1),
('GATE CS', 'CS_Q7', 1),
('GATE CS', 'CS_Q8', 1),
('GATE CS', 'CS_Q9', 1),
('GATE EC', 'EC_Q1', 1),
('GATE EC', 'EC_Q10', 1),
('GATE EC', 'EC_Q11', 2),
('GATE EC', 'EC_Q12', 2),
('GATE EC', 'EC_Q13', 2),
('GATE EC', 'EC_Q14', 2),
('GATE EC', 'EC_Q15', 2),
('GATE EC', 'EC_Q16', 2),
('GATE EC', 'EC_Q17', 2),
('GATE EC', 'EC_Q18', 2),
('GATE EC', 'EC_Q19', 2),
('GATE EC', 'EC_Q2', 1),
('GATE EC', 'EC_Q20', 2),
('GATE EC', 'EC_Q21', 3),
('GATE EC', 'EC_Q22', 3),
('GATE EC', 'EC_Q23', 3),
('GATE EC', 'EC_Q24', 3),
('GATE EC', 'EC_Q25', 3),
('GATE EC', 'EC_Q26', 3),
('GATE EC', 'EC_Q27', 3),
('GATE EC', 'EC_Q28', 3),
('GATE EC', 'EC_Q29', 3),
('GATE EC', 'EC_Q3', 1),
('GATE EC', 'EC_Q30', 3),
('GATE EC', 'EC_Q4', 1),
('GATE EC', 'EC_Q5', 1),
('GATE EC', 'EC_Q6', 1),
('GATE EC', 'EC_Q7', 1),
('GATE EC', 'EC_Q8', 1),
('GATE EC', 'EC_Q9', 1),
('GATE ME', 'ME_Q1', 1),
('GATE ME', 'ME_Q10', 1),
('GATE ME', 'ME_Q11', 2),
('GATE ME', 'ME_Q12', 2),
('GATE ME', 'ME_Q13', 2),
('GATE ME', 'ME_Q14', 2),
('GATE ME', 'ME_Q15', 2),
('GATE ME', 'ME_Q16', 2),
('GATE ME', 'ME_Q17', 2),
('GATE ME', 'ME_Q18', 2),
('GATE ME', 'ME_Q19', 2),
('GATE ME', 'ME_Q2', 1),
('GATE ME', 'ME_Q20', 2),
('GATE ME', 'ME_Q21', 3),
('GATE ME', 'ME_Q22', 3),
('GATE ME', 'ME_Q23', 3),
('GATE ME', 'ME_Q24', 3),
('GATE ME', 'ME_Q25', 3),
('GATE ME', 'ME_Q26', 3),
('GATE ME', 'ME_Q27', 3),
('GATE ME', 'ME_Q28', 3),
('GATE ME', 'ME_Q29', 3),
('GATE ME', 'ME_Q3', 1),
('GATE ME', 'ME_Q30', 3),
('GATE ME', 'ME_Q4', 1),
('GATE ME', 'ME_Q5', 1),
('GATE ME', 'ME_Q6', 1),
('GATE ME', 'ME_Q7', 1),
('GATE ME', 'ME_Q8', 1),
('GATE ME', 'ME_Q9', 1),
('JEE ', 'JEE_Q1', 1),
('JEE ', 'JEE_Q10', 1),
('JEE ', 'JEE_Q11', 2),
('JEE ', 'JEE_Q12', 2),
('JEE ', 'JEE_Q13', 2),
('JEE ', 'JEE_Q14', 2),
('JEE ', 'JEE_Q15', 2),
('JEE ', 'JEE_Q16', 2),
('JEE ', 'JEE_Q17', 2),
('JEE ', 'JEE_Q18', 2),
('JEE ', 'JEE_Q19', 2),
('JEE ', 'JEE_Q2', 1),
('JEE ', 'JEE_Q20', 2),
('JEE ', 'JEE_Q21', 3),
('JEE ', 'JEE_Q22', 3),
('JEE ', 'JEE_Q23', 3),
('JEE ', 'JEE_Q24', 3),
('JEE ', 'JEE_Q25', 3),
('JEE ', 'JEE_Q26', 3),
('JEE ', 'JEE_Q27', 3),
('JEE ', 'JEE_Q28', 3),
('JEE ', 'JEE_Q29', 3),
('JEE ', 'JEE_Q3', 1),
('JEE ', 'JEE_Q30', 3),
('JEE ', 'JEE_Q4', 1),
('JEE ', 'JEE_Q5', 1),
('JEE ', 'JEE_Q6', 1),
('JEE ', 'JEE_Q7', 1),
('JEE ', 'JEE_Q8', 1),
('JEE ', 'JEE_Q9', 1);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` varchar(15) NOT NULL,
  `question_description` varchar(100) NOT NULL,
  `question_hint` varchar(100) DEFAULT NULL,
  `answer` varchar(4) NOT NULL,
  `option1` varchar(50) NOT NULL,
  `option2` varchar(50) NOT NULL,
  `option3` varchar(50) NOT NULL,
  `option4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `question_description`, `question_hint`, `answer`, `option1`, `option2`, `option3`, `option4`) VALUES
('CS_Q1', 'Which of the following is TRUE?', NULL, 'C', 'Every relation in 3NF is also in BCNF', 'A relation R is in 3NF if every non-prime attribut', 'Every relation in BCNF is also in 3NF', 'No relation can be in both BCNF and 3NF'),
('CS_Q10', 'Assume that "host1.mydomain.dom" has an IP address of 145.128.16.8. Which of the following options w', 'Directly query a NS for 145.in-addr.arpa and then a NS for 128.145.in-addr.arpa domains', 'C', 'Query a NS for the root domain and then NS for the', 'Directly query a NS for "dom" and then a NS for "m', 'Query a NS for in-addr.arpa and then a NS for 128.', 'Directly query a NS for 145.in-addr.arpa and then '),
('CS_Q11', 'Identify the correct sequence in which the following packets are transmitted on the network by a hos', 'Say you type www.google.com\r\nFIrst you send DNS request to get IP address. Then you establish connec', 'C', 'HTTP GET request, DNS query, TCP SYN', 'DNS query, HTTP GET request, TCP SYN', 'DNS query, TCP SYN, HTTP GET request', 'TCP SYN, DNS query, HTTP GET request'),
('CS_Q12', 'The address resolution protocol (ARP) is used for:', '', 'D', 'Finding the IP address from the DNS', 'Finding the IP address of the default gateway', 'Finding the IP address that corresponds to a MAC a', 'Finding the MAC address that corresponds to an IP '),
('CS_Q13', 'Which of the following pairs have DIFFERENT expressive power?', 'In rest of the options both machine are equivalent in power.', 'B', 'Deterministic finite automata (DFA) and Non-determ', 'Deterministic push down automata (DPDA) and Non-de', 'Deterministic single tape Turing machine and Non-d', 'Single tape Turing machine and multi-tape Turing m'),
('CS_Q15', 'Which one of the following is FALSE?', 'Option d ndpa is more powerful than dpda so they are not equivalent..actually dpda is a proper subse', 'C', 'There is a unique minimal DFA for every regular la', 'Every NFA can be converted to an equivalent PDA.', 'Complement of every context-free language is recur', 'Every nondeterministic PDA can be converted to an '),
('CS_Q16', 'Which of the following statements is/are FALSE?', 'Recursive enumerable languages are not closed under complement . while recursive languages are.\r\nbot', 'C', 'For every non-deterministic Turing machine, there ', 'Turing recognizable languages are closed under uni', 'Turing decidable languages are closed under inters', 'Turing recognizable languages are closed under uni'),
('CS_Q19', 'The language accepted by a Pushdown Automaton in which the stack is limited to 10 items is best desc', 'With only finite positions in stack, we can have only finite configurations and these can also be mo', 'B', 'Context free', 'Regular', 'Deterministic Context free', 'Recursive'),
('CS_Q2', 'A database table T1 has 2000 records and occupies 80 disk blocks. Another table T2 has 400 records a', 'This algorithm will involve nr*bs+ br block transfers\r\neither T1 can be R or T2\r\nif R is T1 then tot', 'C', '800000', '40080', '32020', '100'),
('CS_Q20', 'Which of the following is true?', 'Complement of recursive language is always recursive', 'A', 'The complement of a recursive language is recursiv', 'The complement of a recursively enumerable languag', 'The complement of a recursive language is either r', 'The complement of a context-free language is conte'),
('CS_Q21', 'Let L denote the languages generated by the grammar S â†’ 0S0 | 00.\r\nWhich of the following is TRUE?', 'B. is the answer for this question\r\nLanguage generated by this grammar is L = (00)^+ that is regular', 'B', 'L = 0+', 'L is regular but not 0+', 'L is context free but not regular', 'L is not context free'),
('CS_Q22', 'The two grammars given below generate a language over the alphabet {x, y, z}\r\nG1 : S â†’ x | z | x S', 'from Above grammar\r\nRegular expression for G1: (x+z) + + (x+z)*y(y+z)+\r\nRegular expression for G2 :(', 'A', 'G1 : No y appears before any x\r\nG2 : Every x is fo', 'G1 : No y appears before any x\r\nG2 : No x appears ', 'G1 : No y appears after any x\r\nG2 : Every x is fol', 'G1 : No y appears after any x\r\nG2 : Every y is fol'),
('CS_Q23', 'If the strings of a language L can be effectively enumerated in lexicographic (i.e., alphabetic) ord', 'Answer is (c)- L is recursive but not necessarily Regular or not even context-free.\r\nSince, the stri', 'C', 'L is Regular', 'L is context free but not necessarily Regular', 'L is recursive but not necessarily Regular', 'L is recursively enumerable but not necessarily Re'),
('CS_Q24', 'Which of the following is true for the language {a^p ? p is a prime }?', 'WE have algorithms to generate prime numbers we can generate sequence of for the given language, hen', 'D', 'It is not accepted by a Turing Machine', 'It is regular but not context-free', 'It is context-free but not regular', 'It is neither regular nor context-free, but accept'),
('CS_Q25', 'Which of the following is true for the language {a^p ? p is a prime }?', 'WE have algorithms to generate prime numbers we can generate sequence of for the given language, hen', 'D', 'It is not accepted by a Turing Machine', 'It is regular but not context-free', 'It is context-free but not regular', 'It is neither regular nor context-free, but accept'),
('CS_Q26', 'Which of the following conversions is not possible (algorithmically)?', 'This will be C. Because if that would have been possible then NPDA and DPDA must had same powers, wh', 'C', 'Regular grammar to context free grammar', 'Non-deterministic FSA to deterministic FSA', 'Non-deterministic PDA to deterministic PDA', 'Non-deterministic Turing machine to deterministic '),
('CS_Q27', 'Regarding the power of recognition of languages, which of the following statements is false?', NULL, 'B', 'The non-deterministic finite-state automata are eq', 'Non-deterministic Push-down automata are equivalen', 'Non-deterministic Turing machines are equivalent t', 'Non-deterministic Turing machines are equivalent t'),
('CS_Q28', 'Where does the swap space reside?', NULL, 'A', 'RAM', 'Disk', 'ROM', 'On-chip cache'),
('CS_Q29', 'Which of the following does not interrupt a running process?', 'timer and disk both makes interrupt and power failure will interrupt the system. only a scheduled pr', 'C', 'A device', 'Timer', 'Scheduled process', 'Power failure'),
('CS_Q3', 'Which level of locking provides the highest degree of concurrency in a relational database ?', 'row level locking provides more concurrency. because different transactions can access different row', 'C', 'Page', 'Table', 'Row', 'Page, table and row level locking allow the same d'),
('CS_Q30', 'What does page means in computer ?', NULL, 'B', 'Book page', 'Memory that are transfer from Secondary to MM', 'Memory that are transfer from MM to Cache M', 'None of the above'),
('CS_Q4', 'Which of the following statements are TRUE?\r\nI. The context diagram should depict the system as a si', NULL, 'C', 'II and III', 'IV and III', 'I and III', 'I, II and III'),
('CS_Q5', 'A database table T1 has 2000 records and occupies 80 disk blocks. Another table T2 has 400 records a', 'In Nested loop join for each tuple in first table we scan through all the tuples in second table.\r\nH', 'B', '0', '30400', '38400', '798400'),
('CS_Q6', 'Which of the following statements are TRUE about an SQL query?\r\nP : An SQL query can contain a HAVIN', 'GATE 2012 Answer key is (C) Q and R are true.\r\nBut correct answer should be B.\r\nWhen group by is not', 'C', 'P and R', 'P and S', 'Q and R', 'Q and S'),
('CS_Q7', 'Start and stop bits do not contain any "information" but are used in serial communication for', '', 'C', 'Error detection', 'Error correction', 'Synchronization', 'Slowing down the communications'),
('CS_Q8', 'A firewall is to be configured to allow hosts in a private network to freely open TCP connections an', 'A) A combinational circuit => Not possible, because we need memory in Firewall, Combinational ckt ha', 'D', 'A combinational circuit', 'A finite automaton', 'A pushdown automaton with one stack', 'A pushdown automaton with two stacks'),
('CS_Q9', 'Which of the following statements is TRUE?', 'Ref:\r\nhttp://en.wikipedia.org/wiki/Ethernet_frame#Structure\r\nhttp://en.wikipedia.org/wiki/IPv4_heade', 'C', 'Both Ethernet frame and IP packet include checksum', 'Ethernet frame includes a checksum field and IP pa', 'Ethernet frame includes a CRC field and IP packet ', 'Both Ethernet frame and IP packet include CRC fiel'),
('EC_Q1', 'It takes 30 minutes to empty a half-full tank by draining it at a constant rate. It is decided to\r\ns', '', 'A', '4 times the draining rate', '3 times the draining rate', '2.5 times the draining rate', '2 times the draining rate'),
('EC_Q10', 'In IC technology, dry oxidation (using dry oxygen) as compared to wet oxidation\r\n(using steam or wat', '', 'D', 'superior quality oxide with a higher growth rate', 'inferior quality oxide with a higher growth rate', 'inferior quality oxide with a lower growth rate', 'superior quality oxide with a lower growth rate'),
('EC_Q11', 'For 8085 microprocessor, the following program is executed\r\nMVI A, 05H;\r\nMVIB, 05H;\r\nPTR: ADD B;\r\nDC', 'Accumulator changes as follows (05 + 05 + 04 +03 +02 +01)H\r\nAt the end of Loop accumulator contains ', 'A', '17 H', '20 H', '23 H', '05 H'),
('EC_Q12', 'The bit rate of a digital communication system is R kbits/s. The modulation used is\r\n32-QAM. The min', '', 'B', 'R/10 Hz', 'R/10 kHz', 'R/5 Hz', 'R/5 kHz'),
('EC_Q13', 'For a periodic signal v (t) = 30sin100t + 10cos300t + 6 sin(500t + p / 4) , the\r\nfundamental frequen', '', 'A', '100', '300', '500', '1500'),
('EC_Q14', 'A band-limited signal with a maximum frequency of 5 kHz is to be sampled.\r\nAccording to the sampling', '', 'A', '5 kHz', '12 kHz', '15 kH', '20 kHz'),
('EC_Q15', 'Which one of the following statements is NOT TRUE for a continuous time causal\r\nand stable LTI syste', 'For an LTI system to be stable and causal all poles or roots of characteristic\r\nequation must lie on', 'C', 'All the poles of the system must lie on the left s', 'Zeros of the system can lie anywhere in the s-plan', 'All the poles must lie within s = 1', 'All the roots of the characteristic equation must '),
('EC_Q16', 'The return loss of a device is found to be 20 dB. The voltage standing wave ratio\r\n(VSWR) and magnit', '', 'A', '1.22 and 0.1', '0.81 and 0.1', 'â€“1.22 and 0.1', '2.44 and 0.2'),
('EC_Q17', 'A system described by a linear, constant coefficient, ordinary, first order\r\ndifferential equation h', '', 'D', 'change the initial condition to â€“y(0) and the fo', 'change the initial condition to 2y (0) and the for', 'change the initial condition to j 2y (0) and the f', 'change the initial condition to -2y(0) and the for'),
('EC_Q18', 'Consider two identically distributed zero-mean random variables U and V. Let the\r\ncumulative distrib', 'F (x) = P{X Â£ x}\r\n( ) { }\r\n{ }\r\nG x P 2X x\r\nP X x\r\n2\r\n= Â£\r\n= Â£\r\nFor positive value of x,\r\nF (x) â', 'D', 'F (x) âˆ’ G(x) Â£ 0', 'F (x) âˆ’ G(x) Â³ 0', '(F (x) âˆ’ G(x)).x Â£ 0', '(F (x) âˆ’ G(x) ).x Â³ 0'),
('EC_Q19', 'Choose the grammatically CORRECT sentence:', '', 'D', 'Two and two add four', 'Two and two BECOME four', 'Two and two are four', 'Two and two make four'),
('EC_Q2', 'Nortonâ€™s theorem states that a complex network connected to a load can be replaced with an\r\nequiva', '', 'D', 'in series with a current source', 'in parallel with a voltage source', 'in series with a voltage source', 'in parallel with a current source'),
('EC_Q20', 'Statement: You can always give me a ring whenever you need.\r\nWhich one of the following is the best ', '', 'C', 'Because I have a nice caller tune', 'Because I have a better telephone facility', 'Because a friend in need in a friend indeed', 'Because you need not pay towards the telephone bil'),
('EC_Q21', 'In the summer of 2012, in New Delhi, the mean temperature of Monday to\r\nWednesday was 41ÂºC and of T', 'Let the temperature of Monday be TM\r\nSum of temperatures of Tuesday and Wednesday = T and\r\nTemperatu', 'C', '40', '43', '46', '49'),
('EC_Q22', 'They were requested not to quarrel with others.\r\nWhich one of the following options is the closest i', '', 'D', 'MAKE OUT', 'CALL OUT ', 'DIG OUT', 'FALL OUT'),
('EC_Q23', 'A car travels 8 km in the first quarter of an hour, 6 km in the second quarter and\r\n16km in the thir', '', 'C', '30', '36', '40', '24'),
('EC_Q24', 'Statement: There were different streams of freedom movements in colonial India\r\ncarried out by the m', '', 'D', 'The emergence of nationalism in colonial India led', 'Nationalism in India emerged in the context of col', 'Nationalism in India is homogeneous', 'Nationalism in India is heterogeneous'),
('EC_Q25', 'What is the chance that a leap year, selected at random, will contain 53\r\nSundays?', 'There are 52 complete weeks in a calendar year  852 Ã— 7 =364days\r\nNumber of days in a leap year = ', 'A', '2/7', '3/7', '1/7', '4/7'),
('EC_Q26', 'An analog signal is band-limited to 4kHz, sampled at the Nyquist rate and the\r\nsamples are quantized', 'Since two samples are transmitted and each sample has 2 bits of information,\r\nthen the information r', 'D', '1', '2', '3', '4'),
('EC_Q27', 'Zener diode, when used in voltage stabilization circuits, is biased in', 'For Zener diode\r\nVoltage remains constant in break down region and current carrying capacity in\r\nhig', 'B', 'reverse bias region below the breakdown voltage', 'reverse breakdown region', 'forward bias region', 'forward bias constant current mode'),
('EC_Q28', 'An input x (t) = exp (âˆ’2t)u(t) + d (t âˆ’ 6) is applied to an LTI system with impulse\r\nresponse h(', '', 'D', 'ï£®[1 âˆ’ exp (âˆ’2t)]u(t) + u(t + 6)', 'ï£°[1 âˆ’ exp (âˆ’2t)]u(t) + u(t âˆ’ 6)', '0.5[1 âˆ’ exp (âˆ’2t)]u(t) + u(t + 6)', '0.5[1 âˆ’ exp (âˆ’2t)]u(t) + u(t âˆ’ 6)'),
('EC_Q29', 'In IC technology, dry oxidation (using dry oxygen) as compared to wet oxidation\r\n(using steam or wat', '', 'D', 'superior quality oxide with a higher growth rate', 'inferior quality oxide with a higher growth rate', 'inferior quality oxide with a lower growth rate', 'superior quality oxide with a lower growth rate'),
('EC_Q3', 'In CMOS technology, shallow P-well or N-well regions can be formed using', '', 'D', 'low pressure chemical vapour deposition', 'low energy sputtering', 'low temperature dry oxidation', 'low energy ion-implantation'),
('EC_Q30', 'For a periodic signal v (t) = 30sin100t + 10cos300t + 6 sin(500t + p / 4) , the\r\nfundamental frequen', '', 'C', 'only the electric field', 'only the carrier concentration gradient', 'both the electric field and the carrier concentrat', 'both the electric field and the carrier concentrat'),
('EC_Q4', 'Which one of the following field patterns represents a TEM wave travelling in the positive x\r\ndirect', 'For TEM wave\r\nElectric field (E), Magnetic field (H) and\r\nDirection of propagation (P) are orthogona', 'B', 'E = +8yË† , H = âˆ’4z', 'E = âˆ’2yË† , H = âˆ’3z', 'E + 2zË†, H = +2y', 'E = âˆ’3yË† , H = +4z'),
('EC_Q5', 'If the electric field of a plane wave is\r\n( ) ( O ) ( O )( ) E Z, t = x3cos wt âˆ’ kz + 30 âˆ’ y4sin', 'A', '', 'left elliptical', 'left circular', 'right elliptical', 'right circular'),
('EC_Q6', 'regular die has six sides with numbers 1 to 6 marked on its sides. If a very large number of\r\nthrows', 'For a very large number of throws, the frequency should be same for unbiased throw. As it\r\nnot same,', 'B', 'irregular', 'biased', 'Gaussian (', 'insufficient'),
('EC_Q7', 'Find the odd one in the following group\r\nQ,W,Z,B  B,H,K,M  W,C,G,J  M,S,V,X', '', 'C', 'Q,W,Z,B', 'B,H,K,M', 'W,C,G,J', 'M,S,V,X'),
('EC_Q8', 'A bulb in a staircase has two switches, one switch being at the ground floor\r\nand the other one at t', 'Let Switches = 1 2 p , p\r\n1 2 p , p Z(o / p)\r\nOFF OFF OFF\r\nOFF ON ON\r\nON OFF ON\r\nON ON OFF\r\nFrom Tru', 'C', 'an AND gate', 'an OR GATE', 'an NAND gate', 'an XOR gate'),
('EC_Q9', 'In a forward biased pn junction diode, the sequence of events that best describes\r\nthe mechanism of ', '', 'A', 'injection, and subsequent diffusion and recombinat', 'injection, and subsequent drift and generation of ', 'extraction, and subsequent diffusion and generatio', 'extraction, and subsequent drift and recombination'),
('JEE_Q1', 'A man grows into a giant such that his linear\r\ndimensions increase by a factor of 9. Assuming that\r\n', 'mass is proportional to volume', 'C', '9', '1/9', '81', '1/81'),
('JEE_Q10', 'An observer is moving with half the speed of light\r\ntowards a stationary microwave source emitting\r\n', ' (speed\r\nof light = 3 × 10^8 ms^–1)', 'C', '10.1 GHz', '12.1 GHz', '17.3 GHz', '15.3 GHz'),
('JEE_Q11', 'A capacitance of 2 microF is required in an electrical\r\ncircuit across a potential difference of 1.0', NULL, 'D', '2', '16', '24', '32'),
('JEE_Q12', ' A magnetic needle of magnetic moment\r\n6.7 × 10^–2 Am^2 and moment of inertia 7.5 × 10^–6 kg m^2\r\nis', NULL, 'A', '6.65 s', '8.89 s', '6.98 s', '8.76 s'),
('JEE_Q13', 'When a current of 5 mA is passed through a\r\ngalvanometer having a coil of resistance 15 ?, it\r\nshows', NULL, 'A', '1.985 × 10^3 ?', '2.045 × 10^3 ?', '2.535 × 10^3 ?', '4.005 × 10^3 ?'),
('JEE_Q14', 'A diverging lens with magnitude of focal length\r\n25 cm is placed at a distance of 15 cm from a\r\nconv', NULL, 'A', 'Real and at a distance of 40 cm from convergent\r\nl', 'Virtual and at a distance of 40 cm from\r\nconvergen', 'Real and at a distance of 40 cm from the\r\ndivergen', 'Real and at a distance of 6 cm from the\r\nconvergen'),
('JEE_Q15', ' In a Young''s double slit experiment, slits are\r\nseparated by 0.5 mm, and the screen is placed\r\n150 ', NULL, 'B', ' 1.56 mm', '7.8 mm', '9.75 mm', '15.6 mm'),
('JEE_Q16', 'In a common emitter amplifier circuit using an\r\nn-p-n transistor, the phase difference between the\r\n', NULL, 'D', '45°\r\n', '90°', '135°', ' 180°'),
('JEE_Q17', 'Which of the following statements is false?', NULL, 'B', 'Wheatstone bridge is the most sensitive when\r\nall ', 'In a balanced Wheatstone bridge if the cell and\r\nt', 'A rheostat can be used as a potential divider', 'Kirchhoff’s second law represents energy\r\nconserva'),
('JEE_Q18', 'change in U is equal to', NULL, 'A', 'Adiabatic work', 'Isothermal work', ' Isochoric work', ' Isobaric work'),
('JEE_Q19', 'The Tyndall effect is observed only when following\r\nconditions are satisfied\r\n(a) The diameter of th', NULL, 'D', '(a) and (c)', ' (b) and (c)', '(a) and (d)', '(b) and (d)'),
('JEE_Q2', 'A body of mass m = 10^–2 kg is moving in a medium\r\nand experiences a frictional force F = –kv^2. Its', NULL, 'C', '10^–3 kg m^–1', '10^–3 kg s^–1', '10^–4 kg m^–1', ' 10^–1 kg m^–1 s^–1'),
('JEE_Q20', 'The freezing point of benzene decreases by 0.45ºC\r\nwhen 0.2 g of acetic acid is added to 20 g of\r\nbe', '(Kf\r\n for benzene = 5.12 K kg mol^–1)', 'A', '74.6%', '94.6%\r\n', '64.6%', '80.4%\r\n'),
('JEE_Q21', 'Two reactions R1 and R2 have identical preexponential\r\nfactors. Activation energy of R1 exceeds\r\ntha', '(R = 8.314 J mole^–1 K^–1)', 'B', ' 6', '4', '8', '12'),
('JEE_Q22', 'pKa of a weak acid (HA) and pKb of a weak base\r\n(BOH) are 3.2 and 3.4, respectively, The pH of their', NULL, 'D', '7.0', ' 1.0', '7.2\r\n', '6.9'),
('JEE_Q23', 'Both lithium and magnesium display several similar\r\nproperties due to the diagonal relationship, how', NULL, 'C', 'Both form nitrides', 'Nitrates of both Li and Mg yield NO2 and O2 on\r\nhe', 'Both form basic carbonates', ' Both form soluble bicarbonates'),
('JEE_Q24', '3-Methyl-pent-2-ene on reaction with HBr in presence\r\nof peroxide forms an addition product. The num', NULL, 'B', 'Two', ' Four', ' Six', 'Zero'),
('JEE_Q25', 'Twenty meters of wire is available for fencing off a\r\nflower-bed in the form of a circular sector. T', NULL, 'B', '10', '25', '30', ' 12.5'),
('JEE_Q26', 'A box contains 15 green and 10 yellow balls. If 10\r\nballs are randomly drawn, one-by-one, with\r\nrepl', NULL, 'D', '6', '4', '6/25', '12/5'),
('JEE_Q27', 'If two different numbers are taken from the set\r\n{0, 1, 2, 3, ......, 10}; then the probability that', NULL, 'D', '12/55', '14/45', '7/55', '6/55'),
('JEE_Q28', ' A man X has 7 friends, 4 of them are ladies and 3\r\nare men. His wife Y also has 7 friends, 3 of the', NULL, 'D', '468', '469\r\n', '484', '485'),
('JEE_Q29', 'If S is the set of distinct values of b for which the\r\nfollowing system of linear equations\r\nx+y+z=1', NULL, 'C', 'An infinite set', 'A finite set containing two or more elements', 'A singleton', 'An empty set'),
('JEE_Q3', 'A time dependent force F = 6t acts on a particle of\r\nmass 1 kg. If the particle starts from rest, th', NULL, 'A', '4.5 J', ' 22 J', ' 9 J', ' 18 J'),
('JEE_Q30', ' The normal to the curve y(x-2)(x-3)=x+6 at\r\nthe point where the curve intersects the y-axis\r\npasses', NULL, 'A', '[1/2,1/2]', '[1/2,-1/3]', '[1/2,1/3]', '[-1/2,-1/2]'),
('JEE_Q4', 'The moment of inertia of a uniform cylinder of length l and radius R about its perpendicular bisecto', NULL, 'A', 'sqrt(3/2)', 'sqrt(3)/2', '1', '3/sqrt(2)'),
('JEE_Q5', 'A slender uniform rod of mass M and length l is\r\npivoted at one end so that it can rotate in a verti', NULL, 'A', '(3g/2l)sinx', '(2g/3l)sinx', '(3g/2l)cosx', '(2g/3l)cosx'),
('JEE_Q6', 'A copper ball of mass 100 gm is at a temperature T.\r\nIt is dropped in a copper calorimeter of mass\r\n', '(Given : room temperature = 30°C, specific heat of\r\ncopper = 0.1 cal/gm°C)', 'B', '800 C', '885 C', '1250 C', '825 C'),
('JEE_Q7', 'An external pressure P is applied on a cube at 0°C\r\nso that it is equally compressed from all sides.', NULL, 'A', 'P/(3xK)', 'P/(xK)', '3x/(PK)', '3PKx'),
('JEE_Q8', 'Cp and Cv are specific heats at constant pressure\r\nand constant volume respectively. It is observed ', NULL, 'C', 'a=(1/14)b', 'a=b', 'a=14b', 'a=28b'),
('JEE_Q9', '. The temperature of an open room of volume 30 m^3\r\nincreases from 17°C to 27°C due to the sunshine.', NULL, 'D', '–1.61 × 10^23', ' 1.38 × 10^23', ' 2.5 × 10^25', '–2.5 × 10^25'),
('ME_Q1', 'â€œIndia is a country of rich heritage and cultural diversity.â€ Which one of the following facts\r\n', 'Diversity is shown in terms of difference language', 'C', 'India is a union of 28 states and 7 union territor', 'India has a population of over 1.1 billion.', 'India is home to 22 official languages and thousan', 'The Indian cricket team draws players from over te'),
('ME_Q10', 'A minimal spanning tree in network flow models involves', 'A path forms a loop or cycle if it connects a node itself. A spanning tree links all the nodes of\r\nn', 'B', 'All the nodes with cycle/loop allowed', 'All the nodes with cycle/loop NOT allowed', 'Shortest path between start and end nodes', 'All the nodes with directed arcs'),
('ME_Q11', 'The threaded bolts A and B of same material and length are subjected to identical\r\ntensile load. If ', 'NULL', 'B', '16', '24', '36', '48'),
('ME_Q12', 'The pressure, dry bulb temperature, and relative humidity of air in a room are\r\n1bar, 30ÂºC and 70% ', 'P = 1 bar = 105 Pa = 100 KPa\r\nsat P = 4.25KPa\r\nP = 1 bar = 105 Pa = 100 KPa\r\nsat P = 4.25KPa', 'C', '0.0083', '0.0101', '0.0191', '0.0232'),
('ME_Q13', 'In a rolling process, the state of stress of the material undergoing deformation is', 'NULL', 'C', 'Pure compression', 'Pure shear', 'Compression and shear', 'Tension and shear'),
('ME_Q14', 'A metric thread of pitch 2mm and thread angle 60Âº is inspected for its pitch\r\ndiameter using 3-wire', 'For 60o thread angle, best wire size =0.57135xP=1.154', 'C', '0.866', '1.000', '1.154', '2.000'),
('ME_Q15', 'Customers arrive at a ticket counter at a rate of 50 per hour and tickets are\r\nissued in the order o', 'NULL', 'C', '3', '4', '5', '6'),
('ME_Q16', 'In simple exponential smoothing forecasting, to give higher weightage to recent\r\ndemand information,', 'Explanations:- Value of a close to one have less of a smoothing effect and give greater\r\nweight to r', 'D', '-1', '0', '0.5', '1'),
('ME_Q17', 'A steel bar 200 mm in diameter is turned at a feed of 0.25 mm/rev with a depth\r\nof cut of 4 mm. The ', 'f Ã— d Ã— v', 'D', '160', '167.6', '1600', '1675.5'),
('ME_Q18', 'For a ductile material, toughness is a measure of', 'Explanations:- Since, toughness has ability to absorb energy up to fracture.', 'B', 'Resistance to scratching', 'Ability to absorb energy up to fracture', 'Ability to absorb energy till elastic limit', 'Resistance to indentation'),
('ME_Q19', 'In order to have maximum power from a Pelton turbine, the bucket speed must\r\nbe', 'Since, velocity of bucket = Â½ times the velocity of jet.', 'B', 'Equal to the jet speed', 'Equal to half the jet speed', 'Equal to twice the jet speed', 'Independent of the jet speed'),
('ME_Q2', 'A manufacturer can produce 12000 bearings per day. The manufacturer received an order of\r\n8000 beari', 'NULL', 'C', '4.5 days', '4.5 months', '6.8 days', '6.8 months'),
('ME_Q20', 'Consider one-dimensional steady state heat conduction along x-axis (0 Â£ x Â£ L) ,\r\nthrough a plane ', 'NULL', 'B', 'The direction of heat transfer will be from the su', 'The maximum temperature inside the wall must be gr', 'The temperature distribution is linear within the ', 'The temperature distribution is symmetric about th'),
('ME_Q21', 'If two nodes are observed at a frequency of 1800 rpm during whirling of a simply\r\nsupported long sle', 'Since it is simply supported critical speed will be half', 'D', '200', '450', '600', '900'),
('ME_Q22', 'A planar closed kinematic chain is formed with rigid links PQ = 2.0m, QR = 3.0m,\r\nRS = 2.5m and SP =', 'Since for Rocker â€“ Rocker mechanism the link opposite to smaller link\r\nmust be fixed', 'C', 'PQ', 'QR', 'RS', 'SP'),
('ME_Q23', 'Specific enthalpy and velocity of steam at inlet and exit of a steam turbine,\r\nrunning under steady ', 'NULL', 'C', '901.2', '911.2', '17072.5', '17082.5'),
('ME_Q24', 'Water is coming out from a tap and falls vertically downwards. At the tap\r\nopening, the stream diame', '', 'B', '10', '15', '20', '25'),
('ME_Q25', 'A flywheel connected to a punching machine has to supply energy of 400 Nm\r\nwhile running at a mean a', '', 'A', '25', '50', '100', '125'),
('ME_Q26', 'In a CAD package, mirror image of a 2D point P(5, 10) is to be obtained about a\r\nline which passes t', '', 'B', '(7.5, 5)', '(10, 5)', '(7.5, -5)', '(10, -5)'),
('ME_Q27', 'Two large diffuse gray parallel plates, separated by a small distance, have\r\nsurface temperatures of', 'A', '', '0.66', '0.79', '0.99', '3.96'),
('ME_Q28', 'While trying to collect an envelope from under the table, Mr. X fell down and', 'R.H. Decreases', 'D', 'Specific humidity of the air increases', 'Specific humidity of the air decreases', 'Relative humidity of the air increases', 'Relative humidity of the air decreases'),
('ME_Q29', 'The operation in which oil is permeated into the pores of a powder metallurgy\r\nproduct is known as', '', 'C', 'Mixing', 'Sintering', 'Impregnation', 'Infiltration'),
('ME_Q3', 'A certain amount of an ideal gas is initially at a pressure P1 and temperature T1. First, it\r\nunderg', 'NULL', 'B', '0.25', '0.75', '1', '1.5'),
('ME_Q30', 'Heat and work are', 'Heat and work are path functions.\r\nSince dQ and dW are dependent on path followed between two given ', 'D', 'Intensive properties', 'Extensive properties', 'Point functions', 'Path functions'),
('ME_Q4', 'Consider a rotating disk cam and a translating roller follower with zero offset. Which one of\r\nthe f', 'From all the four options the maximum amplitudes is in point â€˜Câ€™ as t = 0.\r\n\r\nOption â€˜Câ€™ has', 'C', 'x(t) = cos t, y(t) = sin t', 'x(t) = cos t, y(t) = 2sin t', 'x(t) = 1/2 + cos t, y(t) = 2sin t', 'x(t) = 1/2 + cos t, y(t) = sin t'),
('ME_Q5', 'An annular disc has a mass m, inner radius R and outer radius 2R. The disc rolls on a flat\r\nsurface ', 'NULL', 'C', '(9/16)mv^2', '(11/16)mv^2', '(13/16)mv^2', '(15/16)mv^2'),
('ME_Q6', 'A machine produces 0, 1 or 2 defective pieces in a day with associated probability of 1/6, 2/3\r\nand ', 'NULL', 'A', '1 and 1/3', '1/3 and 1', '1 and 4/3', '1/3 and 4/3'),
('ME_Q7', 'An analytic function of a complex variable z = x + iy is expressed as f(z) = w(x, y) + iv(x, y),\r\nwh', 'Given ( ) ( ) ( ) , f z = x x y +iv x, y is analytic and 2 2 x = x âˆ’ y\r\nWe know that if f (z) = Î¼', 'C', 'xy + c', '(X^2+Y^2)/2', '2xy + c', '(X-Y)^2+C'),
('ME_Q8', 'The hot tearing in a metal casting is due to', 'NULL', 'C', 'high fluidity', 'high melt temperature', 'wide range of solidification temperature', 'low coefficient of thermal expansion'),
('ME_Q9', 'Cutting tool is much harder than the workpiece. Yet the tool wears out during the tool-work\r\ninterac', 'NULL', 'C', 'extra hardness is imparted to the workpiece due to', 'oxide layers on the workpiece surface impart extra', 'extra hardness is imparted to the workpiece due to', 'vibration is induced in the machine tool');

-- --------------------------------------------------------

--
-- Table structure for table `question_comes_from`
--

CREATE TABLE `question_comes_from` (
  `topic_name` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `question_id` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_comes_from`
--

INSERT INTO `question_comes_from` (`topic_name`, `subject`, `question_id`) VALUES
('', 'Applied Mechanics and Design', 'ME_Q1'),
('', 'Applied Mechanics and Design', 'ME_Q10'),
('', 'Applied Mechanics and Design', 'ME_Q13'),
('', 'Applied Mechanics and Design', 'ME_Q16'),
('', 'Applied Mechanics and Design', 'ME_Q19'),
('', 'Applied Mechanics and Design', 'ME_Q22'),
('', 'Applied Mechanics and Design', 'ME_Q25'),
('', 'Applied Mechanics and Design', 'ME_Q28'),
('', 'Applied Mechanics and Design', 'ME_Q4'),
('', 'Applied Mechanics and Design', 'ME_Q7'),
('', 'CHEMISTRY', 'JEE_Q11'),
('', 'CHEMISTRY', 'JEE_Q14'),
('', 'CHEMISTRY', 'JEE_Q17'),
('', 'CHEMISTRY', 'JEE_Q2'),
('', 'CHEMISTRY', 'JEE_Q20'),
('', 'CHEMISTRY', 'JEE_Q26'),
('', 'CHEMISTRY', 'JEE_Q27'),
('', 'CHEMISTRY', 'JEE_Q29'),
('', 'CHEMISTRY', 'JEE_Q5'),
('', 'CHEMISTRY', 'JEE_Q8'),
('', 'COMPUTER NETWORK', 'CS_Q10'),
('', 'COMPUTER NETWORK', 'CS_Q11'),
('', 'COMPUTER NETWORK', 'CS_Q12'),
('', 'COMPUTER NETWORK', 'CS_Q7'),
('', 'COMPUTER NETWORK', 'CS_Q8'),
('', 'COMPUTER NETWORK', 'CS_Q9'),
('', 'Fluid Mechanics and Thermal Sciences', 'ME_Q11'),
('', 'Fluid Mechanics and Thermal Sciences', 'ME_Q14'),
('', 'Fluid Mechanics and Thermal Sciences', 'ME_Q17'),
('', 'Fluid Mechanics and Thermal Sciences', 'ME_Q2'),
('', 'Fluid Mechanics and Thermal Sciences', 'ME_Q20'),
('', 'Fluid Mechanics and Thermal Sciences', 'ME_Q26'),
('', 'Fluid Mechanics and Thermal Sciences', 'ME_Q27'),
('', 'Fluid Mechanics and Thermal Sciences', 'ME_Q29'),
('', 'Fluid Mechanics and Thermal Sciences', 'ME_Q5'),
('', 'Fluid Mechanics and Thermal Sciences', 'ME_Q8'),
('', 'Materials, Manufacturing and Industrial ', 'ME_Q12'),
('', 'Materials, Manufacturing and Industrial ', 'ME_Q15'),
('', 'Materials, Manufacturing and Industrial ', 'ME_Q18'),
('', 'Materials, Manufacturing and Industrial ', 'ME_Q21'),
('', 'Materials, Manufacturing and Industrial ', 'ME_Q24'),
('', 'Materials, Manufacturing and Industrial ', 'ME_Q27'),
('', 'Materials, Manufacturing and Industrial ', 'ME_Q3'),
('', 'Materials, Manufacturing and Industrial ', 'ME_Q30'),
('', 'Materials, Manufacturing and Industrial ', 'ME_Q6'),
('', 'Materials, Manufacturing and Industrial ', 'ME_Q9'),
('', 'MATHEMATICS', 'JEE_Q12'),
('', 'MATHEMATICS', 'JEE_Q15'),
('', 'MATHEMATICS', 'JEE_Q18'),
('', 'MATHEMATICS', 'JEE_Q21'),
('', 'MATHEMATICS', 'JEE_Q24'),
('', 'MATHEMATICS', 'JEE_Q27'),
('', 'MATHEMATICS', 'JEE_Q3'),
('', 'MATHEMATICS', 'JEE_Q30'),
('', 'MATHEMATICS', 'JEE_Q6'),
('', 'MATHEMATICS', 'JEE_Q9'),
('', 'Operating System', 'CS_Q28'),
('', 'Operating System', 'CS_Q29'),
('', 'Operating System', 'CS_Q30'),
('', 'PHYSICS', 'JEE_Q1'),
('', 'PHYSICS', 'JEE_Q10'),
('', 'PHYSICS', 'JEE_Q13'),
('', 'PHYSICS', 'JEE_Q16'),
('', 'PHYSICS', 'JEE_Q19'),
('', 'PHYSICS', 'JEE_Q22'),
('', 'PHYSICS', 'JEE_Q25'),
('', 'PHYSICS', 'JEE_Q28'),
('', 'PHYSICS', 'JEE_Q4'),
('', 'PHYSICS', 'JEE_Q7'),
('', 'Theroy of Computation', 'CS_Q13'),
('', 'Theroy of Computation', 'CS_Q15'),
('', 'Theroy of Computation', 'CS_Q16'),
('', 'Theroy of Computation', 'CS_Q19'),
('', 'Theroy of Computation', 'CS_Q20'),
('', 'Theroy of Computation', 'CS_Q21'),
('', 'Theroy of Computation', 'CS_Q22'),
('', 'Theroy of Computation', 'CS_Q23'),
('', 'Theroy of Computation', 'CS_Q24'),
('', 'Theroy of Computation', 'CS_Q25'),
('', 'Theroy of Computation', 'CS_Q26'),
('', 'Theroy of Computation', 'CS_Q27'),
('NORMAL', 'DATABASE', 'CS_Q1'),
('NORMAL', 'DATABASE', 'CS_Q2'),
('NORMAL', 'DATABASE', 'CS_Q3'),
('NORMAL', 'DATABASE', 'CS_Q4'),
('NORMAL', 'DATABASE', 'CS_Q5'),
('NORMAL', 'DATABASE', 'CS_Q6');

-- --------------------------------------------------------

--
-- Table structure for table `student_answer`
--

CREATE TABLE `student_answer` (
  `student_id` varchar(15) NOT NULL,
  `question_id` varchar(15) NOT NULL,
  `s_answer` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_gives`
--

CREATE TABLE `student_gives` (
  `student_id` varchar(15) NOT NULL,
  `exam_name` varchar(15) NOT NULL,
  `score` int(10) NOT NULL,
  `set_number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_gives`
--

INSERT INTO `student_gives` (`student_id`, `exam_name`, `score`, `set_number`) VALUES
('s1', 'GATE CS', 30, 2),
('s1', 'GATE ME', 3, 2),
('s10', 'JEE', 21, 2),
('s11', 'GATE ME', 21, 2),
('s12', 'GATE CS', 21, 3),
('s13', 'GATE CS', 18, 2),
('s14', 'GATE ME', 18, 1),
('s15', 'JEE ', 18, 1),
('s16', 'GATE CS', 15, 1),
('s17', 'GATE CS', 12, 3),
('s18', 'GATE ME', 15, 1),
('s19', 'GATE ME', 12, 2),
('s19', 'JEE ', 25, 1),
('s2', 'GATE ME', 30, 3),
('s20', 'JEE', 15, 2),
('s3', 'GATE CS', 24, 3),
('s4', 'GATE CS', 26, 2),
('s5', 'GATE ME', 26, 3),
('s6', 'JEE', 30, 3),
('s7', 'JEE', 26, 3),
('s8', 'GATE ME', 24, 3),
('s9', 'JEE', 24, 3);

-- --------------------------------------------------------

--
-- Table structure for table `student_response`
--

CREATE TABLE `student_response` (
  `student_id` varchar(15) NOT NULL,
  `topic_name` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `level` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_response`
--

INSERT INTO `student_response` (`student_id`, `topic_name`, `subject`, `level`) VALUES
('s1', '', 'Operating System', '5'),
('s1', '', 'Theroy of Computation', '5'),
('s1', 'NORMAL', 'DATABASE', '5'),
('s10', '', 'CHEMISTRY', '3'),
('s10', '', 'MATHEMATICS', '4'),
('s10', '', 'PHYSICS', '4'),
('s11', '', 'Applied Mechanics and Design', '3'),
('s11', '', 'Fluid Mechanics and Thermal Sciences', '4'),
('s11', '', 'Materials, Manufacturing and Industrial ', '4'),
('s12', '', 'Operating System', '4'),
('s12', '', 'Theroy of Computation', '4'),
('s12', 'NORMAL', 'DATABASE', '4'),
('s13', '', 'Operating System', '4'),
('s13', '', 'Theroy of Computation', '4'),
('s13', 'NORMAL', 'DATABASE', '3'),
('s14', '', 'Applied Mechanics and Design', '3'),
('s14', '', 'Fluid Mechanics and Thermal Sciences', '3'),
('s14', '', 'Materials, Manufacturing and Industrial ', '4'),
('s15', '', 'CHEMISTRY', '3'),
('s15', '', 'MATHEMATICS', '4'),
('s15', '', 'PHYSICS', '3'),
('s16', '', 'Operating System', '4'),
('s16', '', 'Theroy of Computation', '3'),
('s16', 'NORMAL', 'DATABASE', '3'),
('s17', '', 'Operating System', '1'),
('s17', '', 'Theroy of Computation', '3'),
('s17', 'NORMAL', 'DATABASE', '3'),
('s18', '', 'Applied Mechanics and Design', '3'),
('s18', '', 'Fluid Mechanics and Thermal Sciences', '2'),
('s18', '', 'Materials, Manufacturing and Industrial ', '4'),
('s19', '', 'Applied Mechanics and Design', '3'),
('s19', '', 'Fluid Mechanics and Thermal Sciences', '1'),
('s19', '', 'Materials, Manufacturing and Industrial ', '2'),
('s2', '', 'Applied Mechanics and Design', '5'),
('s2', '', 'Fluid Mechanics and Thermal Sciences', '5'),
('s2', '', 'Materials, Manufacturing and Industrial ', '5'),
('s20', '', 'CHEMISTRY', '2'),
('s20', '', 'MATHEMATICS', '1'),
('s20', '', 'PHYSICS', '3'),
('s3', '', 'Operating System', '5'),
('s3', '', 'Theroy of Computation', '4'),
('s3', 'NORMAL', 'DATABASE', '4'),
('s4', '', 'Operating System', '5'),
('s4', '', 'Theroy of Computation', '5'),
('s4', 'NORMAL', 'DATABASE', '4'),
('s5', '', 'Applied Mechanics and Design', '4'),
('s5', '', 'Fluid Mechanics and Thermal Sciences', '5'),
('s5', '', 'Materials, Manufacturing and Industrial ', '5'),
('s6', '', 'CHEMISTRY', '5'),
('s6', '', 'MATHEMATICS', '5'),
('s6', '', 'PHYSICS', '5'),
('s7', '', 'CHEMISTRY', '4'),
('s7', '', 'MATHEMATICS', '5'),
('s7', '', 'PHYSICS', '5'),
('s8', '', 'Applied Mechanics and Design', '4'),
('s8', '', 'Fluid Mechanics and Thermal Sciences', '4'),
('s8', '', 'Materials, Manufacturing and Industrial ', '5'),
('s9', '', 'CHEMISTRY', '4'),
('s9', '', 'MATHEMATICS', '5'),
('s9', '', 'PHYSICS', '4');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_uploads`
--

CREATE TABLE `teacher_uploads` (
  `teacher_id` varchar(15) NOT NULL,
  `question_id` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `topic_name` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`topic_name`, `subject`) VALUES
('', 'Applied Mechanics and Design'),
('', 'CHEMISTRY'),
('', 'COMPUTER NETWORK'),
('', 'Fluid Mechanics and Thermal Sciences'),
('', 'Materials, Manufacturing and Industrial '),
('', 'MATHEMATICS'),
('', 'Operating System'),
('', 'PHYSICS'),
('', 'Theroy of Computation'),
('NORMAL', 'DATABASE');

-- --------------------------------------------------------

--
-- Table structure for table `user_student`
--

CREATE TABLE `user_student` (
  `student_id` varchar(15) NOT NULL,
  `student_name` varchar(15) NOT NULL,
  `student_password` varchar(15) NOT NULL,
  `student_email` varchar(20) NOT NULL,
  `student_phone` int(10) DEFAULT NULL,
  `student_ranking` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_student`
--

INSERT INTO `user_student` (`student_id`, `student_name`, `student_password`, `student_email`, `student_phone`, `student_ranking`) VALUES
('s1', 'ankit', 's1', 'ankit@gmail.com', 944562354, 1),
('s10', 'surya prakash', 's10', 'surya@gmail.com', 747562545, 4),
('s11', 'virender singh', 's11', 'virender@gmail.com', 957552545, 4),
('s12', 'karan thakur', 's12', 'karan@gmail.com', 887564545, 4),
('s13', 'vicky kumar', 's13', 'vicky@gmail.com', 957442545, 5),
('s14', 'manish pal', 's14', 'manish@gmail.com', 977562545, 5),
('s15', 'satyam pandey', 's151', 'satyam@gmail.com', 857552545, 5),
('s16', 'vinay patel', 's16', 'vinay@gmail.com', 884462445, 6),
('s17', 'somya pandey', 's17', 'somya@gmail.com', 953333545, 7),
('s18', 'kusum singh', 's18', 'kusum@gmail.com', 777565545, 6),
('s19', 'surya thakur', 's19', 'suryat@gmail.com', 747442545, 7),
('s2', 'akshay kumar', 's2', 'akshay@gmail.com', 954562545, 1),
('s20', 'vijay  singh', 's20', 'vijay@gmail.com', 957252545, 6),
('s3', 'akshat pal', 's3', 'akshat@gmail.com', 957562545, 3),
('s4', 'vinay pal', 's4', 'vinay@gmail.com', 957572545, 2),
('s5', 'samraat patel', 's5', 'akshat@gmail.com', 957562445, 2),
('s6', 'rahul pandey', 's6', 'rahul@gmail.com', 857572545, 1),
('s7', 'viraat patel', 's7', 'viraat@gmail.com', 887562445, 2),
('s8', 'pooja pal', 's8', 'pooja@gmail.com', 953362545, 3),
('s9', 'kuldeep singh', 's9', 'kuldeep@gmail.com', 777562545, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_teacher`
--

CREATE TABLE `user_teacher` (
  `teacher_id` varchar(15) NOT NULL,
  `teacher_name` varchar(15) NOT NULL,
  `teacher_password` varchar(15) NOT NULL,
  `teacher_email` varchar(20) NOT NULL,
  `teacher_phone` int(10) DEFAULT NULL,
  `teacher_qualification` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_teacher`
--

INSERT INTO `user_teacher` (`teacher_id`, `teacher_name`, `teacher_password`, `teacher_email`, `teacher_phone`, `teacher_qualification`) VALUES
('t01', 'Rohit', 't01', 'rohit@gmail.com', 941587412, 'M.TECH');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`exam_name`);

--
-- Indexes for table `exam_has`
--
ALTER TABLE `exam_has`
  ADD PRIMARY KEY (`exam_name`,`question_id`,`set_number`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `question_comes_from`
--
ALTER TABLE `question_comes_from`
  ADD PRIMARY KEY (`topic_name`,`subject`,`question_id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `student_answer`
--
ALTER TABLE `student_answer`
  ADD PRIMARY KEY (`student_id`,`question_id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `student_gives`
--
ALTER TABLE `student_gives`
  ADD PRIMARY KEY (`student_id`,`exam_name`),
  ADD KEY `exam_name` (`exam_name`);

--
-- Indexes for table `student_response`
--
ALTER TABLE `student_response`
  ADD PRIMARY KEY (`student_id`,`topic_name`,`subject`),
  ADD KEY `topic_name` (`topic_name`,`subject`);

--
-- Indexes for table `teacher_uploads`
--
ALTER TABLE `teacher_uploads`
  ADD PRIMARY KEY (`teacher_id`,`question_id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`topic_name`,`subject`);

--
-- Indexes for table `user_student`
--
ALTER TABLE `user_student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `user_teacher`
--
ALTER TABLE `user_teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `exam_has`
--
ALTER TABLE `exam_has`
  ADD CONSTRAINT `exam_has_ibfk_1` FOREIGN KEY (`exam_name`) REFERENCES `exam` (`exam_name`),
  ADD CONSTRAINT `exam_has_ibfk_2` FOREIGN KEY (`question_id`) REFERENCES `question` (`question_id`);

--
-- Constraints for table `question_comes_from`
--
ALTER TABLE `question_comes_from`
  ADD CONSTRAINT `question_comes_from_ibfk_1` FOREIGN KEY (`topic_name`,`subject`) REFERENCES `topic` (`topic_name`, `subject`),
  ADD CONSTRAINT `question_comes_from_ibfk_2` FOREIGN KEY (`question_id`) REFERENCES `question` (`question_id`);

--
-- Constraints for table `student_answer`
--
ALTER TABLE `student_answer`
  ADD CONSTRAINT `student_answer_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `user_student` (`student_id`),
  ADD CONSTRAINT `student_answer_ibfk_2` FOREIGN KEY (`question_id`) REFERENCES `question` (`question_id`);

--
-- Constraints for table `student_gives`
--
ALTER TABLE `student_gives`
  ADD CONSTRAINT `student_gives_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `user_student` (`student_id`),
  ADD CONSTRAINT `student_gives_ibfk_2` FOREIGN KEY (`exam_name`) REFERENCES `exam` (`exam_name`);

--
-- Constraints for table `student_response`
--
ALTER TABLE `student_response`
  ADD CONSTRAINT `student_response_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `user_student` (`student_id`),
  ADD CONSTRAINT `student_response_ibfk_2` FOREIGN KEY (`topic_name`,`subject`) REFERENCES `topic` (`topic_name`, `subject`);

--
-- Constraints for table `teacher_uploads`
--
ALTER TABLE `teacher_uploads`
  ADD CONSTRAINT `teacher_uploads_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `user_teacher` (`teacher_id`),
  ADD CONSTRAINT `teacher_uploads_ibfk_2` FOREIGN KEY (`question_id`) REFERENCES `question` (`question_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
