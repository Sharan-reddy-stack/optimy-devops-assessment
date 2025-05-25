import asyncio
from playwright.async_api import async_playwright

async def run_test():
    url = "http://52.208.189.228"

    async with async_playwright() as p:
        browser = await p.chromium.launch(headless=True)
        page = await browser.new_page()
        await page.goto(url)

        content = await page.content()

        assert "Sharan" in content
        assert "Optimy" in content
        assert "DevOps Test" in content

        print("All values found in the table.")

        await browser.close()

asyncio.run(run_test())

