-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 18, 2021 at 05:45 AM
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
(2, '2021-02-12', 'Salim Nazir', '10201684'),
(3, '2021-02-12', 'Ranjith', '55830052');

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
(9, '2021-02-12', 'Salim', 'asdasd', '20000.00', '100.00', '1500.00', 'Credit', '56518575'),
(11, '2021-02-12', 'Salim', 'asdasd', '20000.00', '100.00', '200.00', 'Credit', ''),
(12, '2021-02-12', 'Salim', 'asdasd', '20000.00', '100.00', '1500.00', 'Paid', '');

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
(13, '2021-02-12', '1000333', 'Salim test', 'Wanted', 500, '50.00', '25000.00', '56180694'),
(14, '2021-02-12', 'test', 't3est', 'test', 100, '50.00', '5000.00', '44327752'),
(15, '2021-02-12', ' ', '', '', 0, '0.00', '0.00', '13263418'),
(16, '2021-02-12', ' ', '', '', 0, '0.00', '0.00', '35219329'),
(17, '2021-02-12', ' ', '', '', 0, '0.00', '0.00', '2868569'),
(18, '2021-02-12', ' ', '', '', 0, '0.00', '0.00', '38145425'),
(19, '2021-02-12', ' ', '', '', 0, '0.00', '0.00', '49535218'),
(20, '2021-02-18', 'tesa', 'te', 'as', 12, '166.67', '2000.00', '21064221');

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
(52, '2021-02-12', 'Agent', 'Salim n', 'tasdasd', 200, '0.50', '100.00', '4212307');

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

--
-- Dumping data for table `hi5sc_services`
--

INSERT INTO `hi5sc_services` (`id`, `date`, `category`, `details`, `collections`, `expenses`, `randid`) VALUES
(1, '', '', '', '0.00', '0.00', '46545454'),
(7, '2021-02-10', 'Expenses', 'test', '0.00', '333.00', '44547684'),
(8, '2021-02-10', 'Collections', 'test', '9999.00', '0.00', '29605061'),
(9, '2021-02-10', 'Expenses', '999', '0.00', '999999.00', '25493191');

-- --------------------------------------------------------

--
-- Table structure for table `hi5sc_stock_value`
--

CREATE TABLE `hi5sc_stock_value` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `pur_from` varchar(255) NOT NULL,
  `inv_no` varchar(255) NOT NULL,
  `item_code` varchar(255) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `cost` decimal(65,2) NOT NULL,
  `totalcost` decimal(65,2) NOT NULL,
  `randid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hi5sc_stock_value`
--

INSERT INTO `hi5sc_stock_value` (`id`, `date`, `pur_from`, `inv_no`, `item_code`, `pro_name`, `brand_name`, `qty`, `cost`, `totalcost`, `randid`) VALUES
(1, '', '', '', '', '', '', 0, '0.00', '0.00', '55456454465'),
(2, '2021-02-03', 'test', 'test', 'TEST', 'test', 'test', 0, '50.00', '0.00', '3269851'),
(3, '2021-02-03', 'led', '123123', 'LED', 'led', 'led', 40, '20.00', '800.00', '16943055');

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
-- Indexes for table `hi5sc_stock_value`
--
ALTER TABLE `hi5sc_stock_value`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `item_code` (`item_code`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `hi5sc_sales`
--
ALTER TABLE `hi5sc_sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `hi5sc_services`
--
ALTER TABLE `hi5sc_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hi5sc_stock_value`
--
ALTER TABLE `hi5sc_stock_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hi5sc_users`
--
ALTER TABLE `hi5sc_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
