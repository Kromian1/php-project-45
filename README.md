### Hexlet tests and linter status:
[![Actions Status](https://github.com/Kromian1/php-project-45/actions/workflows/hexlet-check.yml/badge.svg)](https://github.com/Kromian1/php-project-45/actions)
[![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=Kromian1_php-project-45&metric=alert_status)](https://sonarcloud.io/summary/new_code?id=Kromian1_php-project-45)
[![Bugs](https://sonarcloud.io/api/project_badges/measure?project=Kromian1_php-project-45&metric=bugs)](https://sonarcloud.io/summary/new_code?id=Kromian1_php-project-45)
[![Code Smells](https://sonarcloud.io/api/project_badges/measure?project=Kromian1_php-project-45&metric=code_smells)](https://sonarcloud.io/summary/new_code?id=Kromian1_php-project-45)
[![Duplicated Lines (%)](https://sonarcloud.io/api/project_badges/measure?project=Kromian1_php-project-45&metric=duplicated_lines_density)](https://sonarcloud.io/summary/new_code?id=Kromian1_php-project-45)
[![Lines of Code](https://sonarcloud.io/api/project_badges/measure?project=Kromian1_php-project-45&metric=ncloc)](https://sonarcloud.io/summary/new_code?id=Kromian1_php-project-45)
[![Reliability Rating](https://sonarcloud.io/api/project_badges/measure?project=Kromian1_php-project-45&metric=reliability_rating)](https://sonarcloud.io/summary/new_code?id=Kromian1_php-project-45)
[![Security Rating](https://sonarcloud.io/api/project_badges/measure?project=Kromian1_php-project-45&metric=security_rating)](https://sonarcloud.io/summary/new_code?id=Kromian1_php-project-45)
[![Technical Debt](https://sonarcloud.io/api/project_badges/measure?project=Kromian1_php-project-45&metric=sqale_index)](https://sonarcloud.io/summary/new_code?id=Kromian1_php-project-45)
[![Maintainability Rating](https://sonarcloud.io/api/project_badges/measure?project=Kromian1_php-project-45&metric=sqale_rating)](https://sonarcloud.io/summary/new_code?id=Kromian1_php-project-45)
[![Vulnerabilities](https://sonarcloud.io/api/project_badges/measure?project=Kromian1_php-project-45&metric=vulnerabilities)](https://sonarcloud.io/summary/new_code?id=Kromian1_php-project-45)
# Brain Games

Набор из 5 математических игр для развития логического мышления, написанных на PHP.

## Доступные игры:

1. **Brain Even** - Определение четности числа
2. **Brain Calc** - Арифметические выражения
3. **Brain GCD** - Наибольший общий делитель
4. **Brain Prime** - Проверка числа на простоту
5. **Brain Progression** - Поиск пропущенного числа в прогрессии

##  Установка:

git clone https://github.com/Kromian1/php-project-45.git

cd php-project-45

make install

Скрипты в bin должны быть исполняемыми (chmod +x bin/*)

## Запуск:

**Меню выбора игры:**

make brain-launcher

**Запуск конкретной игры:**

make brain-even    # Определение четности числа

make brain-calc    # Арифметические выражения

make brain-gcd     # Наибольший общий делитель

make brain-prime   # Проверка числа на простоту

make brain-progression  # Поиск пропущенного числа в прогрессии

## Структура репозитория:

.

├── bin/                  # скрипты запуска 

├── src/                  # исходный код логики игр

├── .github/              # CI / workflow конфигурации

├── .vscode/              # настройки для VS Code (если есть)

├── composer.json

├── composer.lock

├── Makefile              # команды сборки и запуска

├── README.md             # этот файл

└── .gitignore

## Требования:
- PHP 8.0+
- Composer

## Пример сессии игры (Asciinema):

**Brain Even**: https://asciinema.org/a/NlLBXyOl7idgoTrTIYKJRDlIf

**Brain Calc**: https://asciinema.org/a/5UReAlDy3kAVsV2xKYYxgk5sE

**Brain GCD**: https://asciinema.org/a/vRpXBcn4DlrZvvNkECB5FKdeC

**Brain Prime**: https://asciinema.org/a/Tu3k9dyN6oHV6k04cSVUTEf4F

**Brain Progression**: https://asciinema.org/a/siSPvVCGaMzJoNsLuwXEL4Cjd
