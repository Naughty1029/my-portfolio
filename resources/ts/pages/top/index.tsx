export const TopPage: React.VFC = () => {
    return (
        <>
            <main id="top">
                <form>
                    <div className="searchBox">
                        <input type="text" name="" id="" />
                        <button type="submit">Search</button>
                        <p className="searchOption">
                            <a href="#">options</a>
                        </p>
                    </div>
                    <div className="searchOptions">
                        <p>チェックをつけて、Searchボタンを押してください</p>
                        <ul>
                            <li>
                                <label>
                                    <input type="checkbox" name="react" />
                                    React
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" name="typescript" />
                                    TypeScript
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" name="wordpress" />
                                    WordPress
                                </label>
                            </li>
                        </ul>
                    </div>
                </form>
                <ul className="workLists">
                    <li>
                        <a href="http://" target="_blank" rel="noopener noreferrer">
                            ASA石神井グループ HP
                        </a>
                        <span>- -</span>
                        <a href="">WordPressで新聞配達屋さんのホームページをつくりました</a>
                        <a href="">GitHub</a>
                    </li>
                </ul>
            </main>
        </>
    )
}
