#!/usr/bin/env bash
set -euo pipefail

HOST="${HOST:-127.0.0.1}"
PORT="${PORT:-8000}"

if ! command -v php >/dev/null 2>&1; then
  echo "Error: PHP is required to run Checkout by KPro locally."
  echo "Install PHP 8+ and re-run this script."
  exit 1
fi

echo "Starting Checkout by KPro on http://${HOST}:${PORT}"
echo "Press Ctrl+C to stop."
php -S "${HOST}:${PORT}" -t .
