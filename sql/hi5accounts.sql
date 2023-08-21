-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 22, 2021 at 09:06 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hi5accounts`
--

-- --------------------------------------------------------

--
-- Table structure for table `hi5sc_aca_year`
--

CREATE TABLE `hi5sc_aca_year` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `st_from` date NOT NULL,
  `end_to` date NOT NULL,
  `randid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hi5sc_aca_year`
--

INSERT INTO `hi5sc_aca_year` (`id`, `date`, `st_from`, `end_to`, `randid`) VALUES
(1, '0000-00-00', '2021-01-01', '2022-12-31', '987894546556');

-- --------------------------------------------------------

--
-- Table structure for table `hi5sc_account_no`
--

CREATE TABLE `hi5sc_account_no` (
  `id` int(11) NOT NULL,
  `bankname` varchar(255) NOT NULL,
  `accno` varchar(255) NOT NULL,
  `randid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hi5sc_account_no`
--

INSERT INTO `hi5sc_account_no` (`id`, `bankname`, `accno`, `randid`) VALUES
(1, '', '', '5645645');

-- --------------------------------------------------------

--
-- Table structure for table `hi5sc_agents`
--

CREATE TABLE `hi5sc_agents` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `agent_name` varchar(255) NOT NULL,
  `randid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hi5sc_agents`
--

INSERT INTO `hi5sc_agents` (`id`, `date`, `agent_name`, `randid`) VALUES
(16, '2021-02-18', 'asdasdasdasdsad', '44386841'),
(17, '2021-02-18', 'asdasdasdasdsadsad', '4076361'),
(18, '2021-02-18', 'sdfsdfsadfsadfsdaf', '20749484');

-- --------------------------------------------------------

--
-- Table structure for table `hi5sc_cash_hand`
--

CREATE TABLE `hi5sc_cash_hand` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `subtotal` decimal(65,2) NOT NULL,
  `total` decimal(65,2) NOT NULL,
  `randid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hi5sc_cash_hand`
--

INSERT INTO `hi5sc_cash_hand` (`id`, `date`, `subtotal`, `total`, `randid`) VALUES
(1, '0000-00-00', '0.00', '0.00', '87454546'),
(2, '2012-12-22', '-38600.00', '-38600.00', '6416510'),
(3, '2012-12-23', '-18750.00', '-57350.00', '31535980');

-- --------------------------------------------------------

--
-- Table structure for table `hi5sc_comp_name`
--

CREATE TABLE `hi5sc_comp_name` (
  `id` int(11) NOT NULL,
  `sch_name` varchar(255) NOT NULL,
  `sch_add` text NOT NULL,
  `sch_phone` varchar(255) NOT NULL,
  `sch_fax` varchar(255) NOT NULL,
  `sch_email` varchar(255) NOT NULL,
  `sch_web` varchar(255) NOT NULL,
  `cap_ass` longtext NOT NULL,
  `randid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hi5sc_comp_name`
--

INSERT INTO `hi5sc_comp_name` (`id`, `sch_name`, `sch_add`, `sch_phone`, `sch_fax`, `sch_email`, `sch_web`, `cap_ass`, `randid`) VALUES
(1, 'Hi5 Accounts', '23/1, Kamal Nagar,\r\nMannargudi.', '9940759454', '', 'salnazi@gmail.com', 'http://www.hi5webdesign.com', 'cap', '6545454564');

-- --------------------------------------------------------

--
-- Table structure for table `hi5sc_credit_sales`
--

CREATE TABLE `hi5sc_credit_sales` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `agent_name` varchar(255) NOT NULL,
  `bill_no` varchar(255) NOT NULL,
  `bill_amt` decimal(65,2) NOT NULL,
  `recv_amt` decimal(65,2) NOT NULL,
  `balance` decimal(65,2) NOT NULL,
  `status` varchar(255) NOT NULL,
  `randid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hi5sc_credit_sales`
--

INSERT INTO `hi5sc_credit_sales` (`id`, `date`, `agent_name`, `bill_no`, `bill_amt`, `recv_amt`, `balance`, `status`, `randid`) VALUES
(17, '2021-03-10', 'asdasdasdasdsad', '2223', '1200.00', '200.00', '1000.00', 'Credit', '18618046'),
(18, '2021-03-10', 'asdasdasdasdsad', '2223', '1200.00', '1000.00', '0.00', 'Paid', '9316388');

-- --------------------------------------------------------

--
-- Table structure for table `hi5sc_expenditure_expenses`
--

CREATE TABLE `hi5sc_expenditure_expenses` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `inv_no` varchar(255) NOT NULL,
  `inv_dated` date NOT NULL,
  `category` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `amountrs` decimal(65,2) NOT NULL,
  `updated_date` date NOT NULL,
  `randid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hi5sc_expenditure_expenses`
--

INSERT INTO `hi5sc_expenditure_expenses` (`id`, `date`, `inv_no`, `inv_dated`, `category`, `details`, `amountrs`, `updated_date`, `randid`) VALUES
(1, '0000-00-00', '', '0000-00-00', '', '', '0.00', '0000-00-00', '641567454564');

-- --------------------------------------------------------

--
-- Table structure for table `hi5sc_expenses`
--

CREATE TABLE `hi5sc_expenses` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `expense_type` varchar(255) NOT NULL,
  `expense_desc` varchar(255) NOT NULL,
  `amt` decimal(65,2) NOT NULL,
  `randid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hi5sc_expenses`
--

INSERT INTO `hi5sc_expenses` (`id`, `date`, `expense_type`, `expense_desc`, `amt`, `randid`) VALUES
(18, '2021-02-12', 'Freight Charges', 'tester', '2222.00', '49012742'),
(19, '2021-02-12', 'General Expense', 'aasdadssd', '222.00', '38693004'),
(20, '2021-02-12', 'Freight Charges', 'test', '222.00', '41199943'),
(21, '2021-02-12', 'Freight Charges', 'asdasd', '21.00', '43202481');

-- --------------------------------------------------------

--
-- Table structure for table `hi5sc_general_expenses`
--

CREATE TABLE `hi5sc_general_expenses` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `job_code` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `amount` decimal(65,2) NOT NULL,
  `randid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hi5sc_general_expenses`
--

INSERT INTO `hi5sc_general_expenses` (`id`, `date`, `job_code`, `details`, `amount`, `randid`) VALUES
(1, '', '1000', '', '0.00', '4554564654');

-- --------------------------------------------------------

--
-- Table structure for table `hi5sc_initial_capital`
--

CREATE TABLE `hi5sc_initial_capital` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `category` varchar(255) NOT NULL,
  `capitalamount` decimal(65,2) NOT NULL,
  `updated_date` date NOT NULL,
  `randid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hi5sc_money_trans`
--

CREATE TABLE `hi5sc_money_trans` (
  `id` int(11) NOT NULL,
  `transdate` date NOT NULL,
  `transtype` varchar(255) NOT NULL,
  `bankname` varchar(255) NOT NULL,
  `accno` varchar(255) NOT NULL,
  `transmode` varchar(255) NOT NULL,
  `ref_no` varchar(255) NOT NULL,
  `dep_amountrs` decimal(65,2) NOT NULL,
  `with_amountrs` decimal(65,2) NOT NULL,
  `sub_tot` decimal(65,2) NOT NULL,
  `over_tot` decimal(65,2) NOT NULL,
  `randid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hi5sc_money_trans`
--

INSERT INTO `hi5sc_money_trans` (`id`, `transdate`, `transtype`, `bankname`, `accno`, `transmode`, `ref_no`, `dep_amountrs`, `with_amountrs`, `sub_tot`, `over_tot`, `randid`) VALUES
(1, '0000-00-00', '', '', '', '', '', '0.00', '0.00', '0.00', '0.00', '54989787');

-- --------------------------------------------------------

--
-- Table structure for table `hi5sc_other_income`
--

CREATE TABLE `hi5sc_other_income` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `income_source` text NOT NULL,
  `amtrs` decimal(65,2) NOT NULL,
  `randid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hi5sc_purchase`
--

CREATE TABLE `hi5sc_purchase` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `inv_no` varchar(255) NOT NULL,
  `supplier` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `cost` decimal(65,2) NOT NULL,
  `total` decimal(65,2) NOT NULL,
  `randid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hi5sc_purchase`
--

INSERT INTO `hi5sc_purchase` (`id`, `date`, `inv_no`, `supplier`, `details`, `qty`, `cost`, `total`, `randid`) VALUES
(32, '2021-02-23', '1000', 'India Mart', 'Killer', 10, '100.00', '1000.00', '7276419'),
(34, '2021-02-23', '20000', 'Amazon', 'Killer', 20, '250.00', '5000.00', '54228405'),
(36, '2021-02-23', '3000', 'Kilik', 'Killer', 35, '71.43', '2500.00', '25380121');

-- --------------------------------------------------------

--
-- Table structure for table `hi5sc_sales`
--

CREATE TABLE `hi5sc_sales` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `customer_type` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `item_desc` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `rate` decimal(65,2) NOT NULL,
  `total` decimal(65,2) NOT NULL,
  `randid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hi5sc_sales`
--

INSERT INTO `hi5sc_sales` (`id`, `date`, `customer_type`, `customer_name`, `item_desc`, `qty`, `rate`, `total`, `randid`) VALUES
(52, '2021-02-12', 'Agent', 'Salim n', 'Wanted', 200, '0.50', '100.00', '4212307'),
(53, '2021-02-18', 'Agent', 'asdasdasdasdsad', 'asd', 122, '2121.00', '258762.00', '44766083'),
(54, '2021-02-23', 'Agent', 'asdasdasdasdsad', 'Killer', 25, '300.00', '7500.00', '5392669'),
(55, '2021-02-23', 'Agent', 'asdasdasdasdsad', 'Killer', 12, '3333.00', '39996.00', '20020507');

-- --------------------------------------------------------

--
-- Table structure for table `hi5sc_services`
--

CREATE TABLE `hi5sc_services` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `collections` decimal(65,2) NOT NULL,
  `expenses` decimal(65,2) NOT NULL,
  `randid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hi5sc_service_orders`
--

CREATE TABLE `hi5sc_service_orders` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `bill_amt` decimal(65,2) NOT NULL,
  `recv_amt` decimal(65,2) NOT NULL,
  `balance` decimal(65,2) NOT NULL,
  `status` varchar(255) NOT NULL,
  `randid` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hi5sc_service_orders`
--

INSERT INTO `hi5sc_service_orders` (`id`, `date`, `customer_name`, `bill_amt`, `recv_amt`, `balance`, `status`, `randid`, `timestamp`) VALUES
(26, '2021-03-10', 'Salim', '5000.00', '2000.00', '3000.00', 'On Process', '25853896', '2021-03-10 08:55:50'),
(29, '2021-03-10', 'Salim', '5000.00', '3000.00', '0.00', 'On Process', '43173222', '2021-03-10 08:55:50'),
(30, '2021-03-10', 'Salim', '5000.00', '0.00', '0.00', 'Delivered', '13221739', '2021-03-10 08:55:50');

-- --------------------------------------------------------

--
-- Table structure for table `hi5sc_stock_value`
--

CREATE TABLE `hi5sc_stock_value` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `total` decimal(65,2) NOT NULL,
  `randid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hi5sc_stock_value`
--

INSERT INTO `hi5sc_stock_value` (`id`, `date`, `details`, `qty`, `total`, `randid`) VALUES
(31, '2021-02-23', 'Killer', 90, '-7070.67', '29813557');

-- --------------------------------------------------------

--
-- Table structure for table `hi5sc_users`
--

CREATE TABLE `hi5sc_users` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `userid` varchar(255) NOT NULL,
  `passkey` varchar(255) NOT NULL,
  `randid` varchar(255) NOT NULL,
  `privilege` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hi5sc_users`
--

INSERT INTO `hi5sc_users` (`id`, `date`, `userid`, `passkey`, `randid`, `privilege`) VALUES
(1, '0000-00-00', 'admin', 'admin', '65454542', 'Administrator'),
(2, '0000-00-00', 'jaseena', 'splender84', '564465456', 'Manager'),
(4, '0000-00-00', 'salnazi', 'splender84', '65454542', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hi5sc_aca_year`
--
ALTER TABLE `hi5sc_aca_year`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hi5sc_account_no`
--
ALTER TABLE `hi5sc_account_no`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `randid` (`randid`);

--
-- Indexes for table `hi5sc_agents`
--
ALTER TABLE `hi5sc_agents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `agent_name` (`agent_name`);

--
-- Indexes for table `hi5sc_cash_hand`
--
ALTER TABLE `hi5sc_cash_hand`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `date` (`date`);

--
-- Indexes for table `hi5sc_comp_name`
--
ALTER TABLE `hi5sc_comp_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hi5sc_credit_sales`
--
ALTER TABLE `hi5sc_credit_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hi5sc_expenditure_expenses`
--
ALTER TABLE `hi5sc_expenditure_expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hi5sc_expenses`
--
ALTER TABLE `hi5sc_expenses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `randid` (`randid`);

--
-- Indexes for table `hi5sc_general_expenses`
--
ALTER TABLE `hi5sc_general_expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hi5sc_initial_capital`
--
ALTER TABLE `hi5sc_initial_capital`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category` (`category`);

--
-- Indexes for table `hi5sc_money_trans`
--
ALTER TABLE `hi5sc_money_trans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `randid` (`randid`);

--
-- Indexes for table `hi5sc_other_income`
--
ALTER TABLE `hi5sc_other_income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hi5sc_purchase`
--
ALTER TABLE `hi5sc_purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hi5sc_sales`
--
ALTER TABLE `hi5sc_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hi5sc_services`
--
ALTER TABLE `hi5sc_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hi5sc_service_orders`
--
ALTER TABLE `hi5sc_service_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hi5sc_stock_value`
--
ALTER TABLE `hi5sc_stock_value`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `details` (`details`);

--
-- Indexes for table `hi5sc_users`
--
ALTER TABLE `hi5sc_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userid` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hi5sc_aca_year`
--
ALTER TABLE `hi5sc_aca_year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hi5sc_account_no`
--
ALTER TABLE `hi5sc_account_no`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hi5sc_agents`
--
ALTER TABLE `hi5sc_agents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `hi5sc_cash_hand`
--
ALTER TABLE `hi5sc_cash_hand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hi5sc_comp_name`
--
ALTER TABLE `hi5sc_comp_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hi5sc_credit_sales`
--
ALTER TABLE `hi5sc_credit_sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `hi5sc_expenditure_expenses`
--
ALTER TABLE `hi5sc_expenditure_expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hi5sc_expenses`
--
ALTER TABLE `hi5sc_expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `hi5sc_general_expenses`
--
ALTER TABLE `hi5sc_general_expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hi5sc_initial_capital`
--
ALTER TABLE `hi5sc_initial_capital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hi5sc_money_trans`
--
ALTER TABLE `hi5sc_money_trans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hi5sc_other_income`
--
ALTER TABLE `hi5sc_other_income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hi5sc_purchase`
--
ALTER TABLE `hi5sc_purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `hi5sc_sales`
--
ALTER TABLE `hi5sc_sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `hi5sc_services`
--
ALTER TABLE `hi5sc_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hi5sc_service_orders`
--
ALTER TABLE `hi5sc_service_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `hi5sc_stock_value`
--
ALTER TABLE `hi5sc_stock_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `hi5sc_users`
--
ALTER TABLE `hi5sc_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
