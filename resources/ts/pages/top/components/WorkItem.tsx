// import React from "react";

type Works = {
    id: number
    title: string
    comment: string
    url: string
    github: string | null
}

export const WorkItem: React.VFC<{ work: Works }> = ({ work }) => {
    //タイトルを出力
    const itemGithub = () => {
        return (
            <a href={work.github ? work.github : ''} target="_blank" rel="noopener noreferrer">
                GitHub
            </a>
        )
    }

    return (
        <li>
            <a href={work.url} target="_blank" rel="noopener noreferrer">
                {work.title}
            </a>
            <span>--</span>
            <a href={work.url} target="_blank" rel="noopener noreferrer">
                {work.comment}
            </a>
            {work.github ? itemGithub() : ''}
        </li>
    )
}
