import React from 'react';
import PropTypes from 'prop-types';

const NewsItem = ({ title, description, imageUrl, newsUrl }) => {
  // Use a base-relative path for the default image (works with HashRouter)
  const defaultImage = process.env.PUBLIC_URL + '/blank.jpg';
  
  return (
    <div className="card h-100">
      <img
        src={imageUrl || defaultImage}
        className="card-img-top"
        alt={title ? `News: ${title.slice(0, 60)}` : "News thumbnail"}
        style={{ height: '200px', objectFit: 'cover' }}
        onError={(e) => {
          e.target.src = defaultImage; // Fallback if imageUrl fails to load
        }}
      />
      <div className="card-body d-flex flex-column">
        <h5 className="card-title">{title || "No title available"}</h5>
        <p className="card-text">
          {description || "No description provided."}
        </p>
        <a
          href={newsUrl}
          target="_blank"
          rel="noopener noreferrer"
          className="btn btn-primary btn-sm mt-auto"
          aria-label={`Read more about ${title || 'this news'}`}
        >
          Read more
        </a>
      </div>
    </div>
  );
};

NewsItem.propTypes = {
  title: PropTypes.string,
  description: PropTypes.string,
  imageUrl: PropTypes.string,
  newsUrl: PropTypes.string.isRequired
};

export default NewsItem;