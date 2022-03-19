type Works = {
    id: number
    title: string
    comment: string
    url: string
    github: string | null
}

type Props = {
    // updateWorks:(data:any)=>void
    works: Works[]
}

export const SearchForm: React.VFC<Props> = ({ works }) => {
    console.log(works)
    const toggleSearchOptions = (event: React.MouseEvent<HTMLElement>) => {
        event.preventDefault()
        const el = event.target as HTMLElement
        const target = el.getAttribute('href')
        if (target) {
            const id = document.getElementById(target)
            id ? id.classList.toggle('active') : ''
        }
    }
    return (
        <form>
            <div className="searchBox">
                <input type="text" name="" id="" />
                <button type="submit">Search</button>
                <p className="searchOption">
                    <a onClick={toggleSearchOptions} href="searchOptions">
                        options
                    </a>
                </p>
            </div>
            <div id="searchOptions" className="searchOptions">
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
    )
}
