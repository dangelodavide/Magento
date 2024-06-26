# Magento 2 Developer Module 

## Overview

Welcome to the Magento 2 Developer Module repository! This repository contains a set of modules designed to enhance the development process for Magento 2 projects. Currently, the repository includes the following modules:

- **Code Generator** ✨: Simplifies the creation of Magento 2 components.
- **Debug Helper** 🛠️: Provides tools to assist in debugging Magento 2 applications.

## Requirements 📋

- Magento 2.4.x
- PHP 7.4 or higher
- Composer

## Installation 💻

To install the Magento 2 Developer Module, follow these steps:

1. **Clone the Repository**:
    ```bash
    git clone https://github.com/dangelodavide/Magento.git
    ```

2. **Navigate to the Magento Root Directory**:
    ```bash
    cd /path/to/magento/root
    ```

3. **Enable the Modules**:
    ```bash
    bin/magento module:enable Developer_Module
    bin/magento module:enable Developer_Module2
    bin/magento setup:upgrade
    ```

4. **Clear Cache**:
    ```bash
    bin/magento cache:clean
    ```

## Usage 🧰

### Debug Helper Module 🛠️

Access debugging tools via the Magento Admin Panel under the "Developer Tools" section.

## Contributing 🤝

We welcome contributions to improve the Magento 2 Developer Module! Please follow these steps to contribute:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/YourFeature`).
3. Commit your changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature/YourFeature`).
5. Open a Pull Request.


Thank you for using the Magento 2 Developer Module! We hope it significantly improves your development workflow. 😊
