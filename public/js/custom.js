import {Link} from 'react-router5';
import PropTypes from 'prop-types';
import React from "react";
import {useRoute} from 'Routing';

export const Pagination = props => {
    const {route} = useRoute();
    const all = Number(props.all);
    const limit = Number(props.limit);
    const length = typeof props.step === "undefined" ? 5 : Number(Math.abs(props.step));
    const page = Number(route.params.page || 1);

    const result = [];
    const urlParams = route.params;
    const pagesCount = Math.ceil(all / limit);

    const push = (page, current, state = "open") => {
        const params = Object.assign({}, urlParams, {page: page});

        result.push({page: page, state: state, current: current, urlParams: params});
    };

    if (pagesCount < (length + 1) * 3) {
        for (let i = 1; i <= pagesCount; i++){
            push(i, i === page);
        }
    } else {
        if (page <= length - 1) {
            for (let i = 1; i <= length; i++){
                push(i, i === page);
            }

            push(Math.round(pagesCount / 2), false, "skip");

            for (let i = pagesCount - length + 1; i <= pagesCount; i++){
                push(i, i === page);
            }
        } else if (page >= length && page < (length + 1) * 2) {
            for (let i = 1; i < ((length + 1) * 2) + 1; i++){
                push(i, i === page);
            }

            push(Math.round(((pagesCount - length) - (length + 1) * 2) / 2), false, "skip");

            for (let i = pagesCount - length + 1; i <= pagesCount; i++){
                push(i, i === page);
            }
        } else if (page >= (length + 1) * 2 && page <= pagesCount - ((length + 1) * 2) + 1) {
            for (let i = 1; i <= length; i++){
                push(i, i === page);
            }

            push(Math.round(page / 2), false, "skip");

            for (let i = page - length; i <= page + length; i++){
                push(i, i === page);
            }

            push(Math.round((pagesCount + page) / 2), false, "skip");

            for (let i = pagesCount - length + 1; i <= pagesCount; i++){
                push(i, i === page);
            }
        } else {
            for (let i = 1; i <= length; i++){
                push(i, i === page);
            }
            push(Math.round(pagesCount / 2), false, "skip");

            for (let i = page - length; i <= pagesCount; i++){
                push(i, i === page);
            }
        }
    }

    const linkProps = {
        routeOptions: {reload: true},
        routeName: route.name,
        className: 'page-link'
    };

    if (props.onClick) {
        linkProps.onClick = props.onClick;
    }

    return (
        <ul className="pagination">
        {result.map((e, i) => {
                return (
                    <li key={i} className={e.page === page ? "page-item active" : "page-item"}>
                    <Link {...linkProps} routeParams={e.urlParams}>
                    {e.state === "open" ? e.page : "..."}
                    </Link>
                    </li>
            );
            })}
        </ul>
);
};

Pagination.propTypes = {
    all: PropTypes.number.isRequired,
    limit: PropTypes.number.isRequired,
    onClick: PropTypes.func
};

export default Pagination;
